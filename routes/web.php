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
//    return view('welcome');
//});
Route::get('/', 'HomeController@show')->name('show');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articles','ArticleController');
Route::prefix('admin')->group(function () {
    Auth::routes();
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeAdminController@index')->name('admin.home');
    Route::get('/user', 'HomeAdminController@getListUser')->name('users.list');
    Route::any('banner/updateStatusBanner', 'BannerController@updateStatusBanner');
    Route::resource('banner','BannerController');
    Route::resource('content','ContentController');

});