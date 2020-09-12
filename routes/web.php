<?php

use Illuminate\Support\Facades\Route;

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

/*
-Landing Page
-Diplomarbeit
-Features
-Gallery
-(Blog)
*/

//Landing Page
Route::get('/', 'LandingController@index');
Route::get('/home', 'LandingController@index');
Route::get('/landing', 'LandingController@index');

//Diplomabeit
Route::get('diplomarbeit', 'DiplomarbeitController@index');
Route::get('da', 'DiplomarbeitController@index');

//About
Route::get('about', 'AboutController@index');
Route::get('features', 'AboutController@index');

//Gallery
Route::get('gallery', 'GalleryController@index');

//Hidden Admin Panel
Route::get('admin', 'AdminController@index')->middleware('auth');

//Posts Admin Panel
Route::resource('admin/posts', 'PostsController')->middleware('auth');

//Features Admin Panel
Route::resource('admin/features', 'FeaturesController')->middleware('auth');

//Posts
Route::get('posts/{id}', 'PostsController@detail');

//Variables
Route::resource('admin/variables', 'VariablesController')->middleware('auth')->only([
    'edit', 'update'
]);

//Authentication
Auth::routes(['register' => false]);
