<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
  Route::get('/', 'SpaController@admin');
  Route::get('{any}', 'SpaController@admin')->where('any', '.*');
});

Route::get('/{any}', 'SpaController@app')->where('any', '.*');