<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::get(LaravelLocalization::transRoute('routes.posts'), 'PostController@index')->name('posts.index');
Route::get(LaravelLocalization::transRoute('routes.posts-show'), 'PostController@show')->name('posts.show');

