<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get(LaravelLocalization::transRoute('routes.products'), 'ProductController@index')->name('products.index');
Route::get(LaravelLocalization::transRoute('routes.products-show'), 'ProductController@show')->name('products.show');
