<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
  Route::view('/', 'admin')->where('any', '.*');
  Route::view('/{any}', 'admin')->where('any', '.*');
});

Route::view('/{any}', 'app')->where('any', '.*');