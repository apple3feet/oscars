<?php

Route::match(['get','post'], '/{year?}', 'IndexController@index');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
