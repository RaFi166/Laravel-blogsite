<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//frontend
Route::get('','HomeController@index')->name('home');

//backend
Route::get('admin/dashboard','AdminController@index')->name('admin_dashboard');
//Route::get('','HomeController@index')->name('home');