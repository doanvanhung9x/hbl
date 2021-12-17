<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Post\Entities\Post;
use Modules\Product\Entities\Product;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::take(4)->with('user')->whereHas('categories', function ($query){
                $query->where('is_active', 1);
            })->get();

        $productSupplements = Product::take(4)->whereHas('categories', function ($query){
                $query->whereTranslation('slug', 'thuc-pham-bo-sung');
            })->get();

        $productMedicals = Product::take(4)->whereHas('categories', function ($query){
            $query->whereTranslation('slug', 'thiet-bi-y-te');
        })->get();

        $productFoods = Product::take(4)->whereHas('categories', function ($query){
            $query->whereTranslation('slug', 'thuc-pham-dinh-duong');
        })->get();

        $categories = Category::whereNull('parent_id')->with('files')->take(6)->get();
        return view('public.home.index', compact('categories', 'posts', 'productSupplements', 'productMedicals', 'productFoods'));
    }

    public function search()
    {
        $posts = Post::whereTranslationLike('title', '%'.request('q').'%')->where('is_active', 1)->get();
        $products = Product::whereTranslationLike('name', '%'.request('q').'%')->where('is_active', 1)->get();
        return view('public.search', compact('posts', 'products'));
    }
}
