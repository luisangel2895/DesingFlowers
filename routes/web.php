<?php

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/desings', 'DesingController');

Route::post('/logout_force', 'LogoutController@logout');