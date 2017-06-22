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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs', 'ArticlesController', ['only' => ['index', 'show', 'view']]);

Route::get('cms', 'Cms\DashboardController@index');
Route::get('dashboard', 'Cms\DashboardController@index');
Route::resource('articles', 'Cms\ArticlesController');
Route::resource('profile', 'ProfileController@index');
Route::resource('categories', 'Cms\CategoriesController');
Route::resource('tags', 'Cms\TagsController');

Route::get('cat', 'CategoriesController@single');
Route::get('cats', 'CategoriesController@index');

Route::resource('users', 'Cms\UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');


 Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
  Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
