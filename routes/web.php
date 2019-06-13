<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductWebController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
