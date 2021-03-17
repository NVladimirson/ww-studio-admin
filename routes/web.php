<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\PageController@index')->name('home');

Route::get('/about','App\Http\Controllers\PageController@index')->name('about');
Route::get('/about/{title}','App\Http\Controllers\PageController@index')->name('about.show');

Route::get('/booksmedia','App\Http\Controllers\PageController@index')->name('booksmedia');
Route::get('/programme/{title}','App\Http\Controllers\PageController@index')->name('booksmedia.show');

Route::get('/contact','App\Http\Controllers\PageController@index')->name('contact');
Route::get('/contact/{title}','App\Http\Controllers\PageController@index')->name('contact.show');

Route::get('/partners','App\Http\Controllers\PageController@index')->name('partners');
Route::get('/partners/{title}','App\Http\Controllers\PageController@index')->name('partners.show');

Route::get('/programme','App\Http\Controllers\PageController@index')->name('programme');
Route::get('/programme/{title}','App\Http\Controllers\PageController@index')->name('programme.show');

Route::get('/seminars','App\Http\Controllers\PageController@index')->name('seminars');
Route::get('/seminars/{title}','App\Http\Controllers\PageController@index')->name('seminars.show');
