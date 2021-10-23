<?php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::get(LaravelLocalization::transRoute('routes.contacts'), 'ContactController@create')->name('contacts.create');
Route::post(LaravelLocalization::transRoute('routes.contacts-store'), 'ContactController@store')->name('contacts.store');

//Route::get('contact', 'ContactController@create')->name('contacts.create');
//Route::post('contact', 'ContactController@store')->name('contacts.store');
