<?php

Route::get('/', 'Frontend\UserController@index');
Route::get('/', 'Frontend\UserController@index')->name('user.register');
Route::post('save/reg-info', 'Frontend\UserController@saveRegistrationInfo')->name('register.form');
Route::get('view/reg-info', 'Frontend\UserController@viewRegistrationInfo')->name('view.regInfo');

Route::get('user/login', 'Frontend\UserController@login')->name('login.form');
Route::post('after/login', 'Frontend\UserController@loginSubmit')->name('login.submit');
Route::get('user/logout', 'Frontend\UserController@logout')->name('logout');

Route::get('create/license', 'Frontend\UserController@createLicnse')->name('create.license');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
