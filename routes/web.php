<?php
Auth::routes();
Route::get('/{any}', 'SpaController@index')->where('any', '.*');
// Route::get('/home', 'HomeController@index')->name('home');
// https://laravel-news.com/building-vue-spa-laravel-part-2/