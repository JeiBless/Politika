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

Auth::routes();


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('home', 'HomeController');
    Route::resource('people', 'PeopleController');
    Route::resource('roles', 'RolesController');
    Route::resource('news', 'NewsController');
    Route::resource('crimes', 'CrimesController');
    Route::resource('districts', 'DistrictsController');
    Route::resource('political-parties', 'PoliticalPartiesController');
});

