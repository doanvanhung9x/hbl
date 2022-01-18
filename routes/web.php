<?php

//use Spatie\Sitemap\SitemapGenerator;
//
//SitemapGenerator::create('https://hblgroup.vn')->writeToFile(public_path('sitemap.xml'));

Route::get('install/pre-installation', 'InstallController@preInstallation');
Route::get('install/configuration', 'InstallController@getConfiguration');
Route::post('install/configuration', 'InstallController@postConfiguration');
Route::get('install/complete', 'InstallController@complete');
