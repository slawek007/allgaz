<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('index');
///})->name('mainPage');

Route::get('/', 'PagesController@index')->name('mainPage');

Route::get('/kalkulator-lpg', function () {
    return view('kalkulator-lpg');
});
Route::get('/kontakt', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/zamontowane-instalacje-lpg', 'RealizationcategoriesController@index')->name('realization.index');
Route::get('/zamontowane-instalacje-lpg/{slug}', 'RealizationcategoriesController@show')->name('realization.show');

Route::get('/{slug}', 'PagesController@show')->name('page.show');

