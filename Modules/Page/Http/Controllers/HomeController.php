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

        $products = Product::take(4)->whereHas('categories', function ($query){
                $query->where('is_active', 1);
            })->get();
        $categories = Category::whereNull('parent_id')->with('files')->take(6)->get();
        return view('public.home.index', compact('categories', 'posts', 'products'));
    }
}
