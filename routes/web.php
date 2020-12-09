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

Route::get('/', function () {
    return view('web.body');
});

Auth::routes();

Route::get('/apercu', 'HomeController@apercu')->name('apercu');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');

Route::get('/content', 'HomeController@content')->name('content');
Route::get('/inscription', 'HomeController@inscription')->name('inscription');
Route::get('/connect', 'HomeController@connect')->name('connect');

Route::get('/vue', 'HomeController@vue')->name('vue');

Route::get('/demo', 'HomeController@demo')->name('demo');
Route::get('/terms', 'ConnexionController@terms')->name('terms');

Route::get('/register', 'HomeController@register')->name('register');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/privacy', 'ConnexionController@privacy')->name('privacy');
