<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Post\Entities\Post;
use Modules\Product\Entities\Product;
use Modules\Product\Events\ProductViewed;
use Modules\Product\Filters\ProductFilter;
use Modules\Product\Events\ShowingProductList;
use Modules\Product\Http\Middleware\SetProductSortOption;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(SetProductSortOption::class)->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Modules\Product\Entities\Product $model
     * @param \Modules\Product\Filters\ProductFilter $productFilter
     * @return \Illuminate\Http\Response
     */
    public function index(Product $model, ProductFilter $productFilter)
    {
        $productIds = [];
        $category = null;

        if (request()->has('query')) {
            $model = $model->search(request('query'));
            $productIds = $model->keys();
        }

        $query = $model->filter($productFilter);

        if (request()->has('category')) {
            $category = Category::whereTranslation('slug', request('category'))->first();
            $productIds = (clone $query)->select('products.id')->resetOrders()->pluck('id');
        }

        $products = $query->paginate(request('perPage', 6))
            ->appends(request()->query());

        if (request()->wantsJson()) {
            return response()->json($products);
        }

        $posts = Post::take(4)->with('user')->whereHas('categories', function ($query){
            $query->where('is_active', 1);
        })->get();

        event(new ShowingProductList($products));
        return view('public.products.index', compact('products', 'productIds', 'category', 'posts'));
    }

    /**
     * Show the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::findBySlug($slug);
        $relatedProducts = $product->relatedProducts()->forCard()->get();
        $upSellProducts = $product->upSellProducts()->forCard()->get();
        $reviews = $this->getReviews($product);

        if (setting('reviews_enabled')) {
            $product->load('reviews:product_id,rating');
        }
        $posts = Post::take(4)->with('user')->whereHas('categories', function ($query){
            $query->where('is_active', 1);
        })->get();
        event(new ProductViewed($product));
        return view('public.products.show', compact('product', 'relatedProducts', 'upSellProducts', 'reviews', 'posts'));
    }

    /**
     * Get reviews for the given product.
     *
     * @param \Modules\Product\Entities\Product $product
     * @return \Illuminate\Support\Collection
     */
    private function getReviews($product)
    {
        if (! setting('reviews_enabled')) {
            return collect();
        }

        return $product->reviews()->paginate(15, ['*'], 'reviews');
    }
}
