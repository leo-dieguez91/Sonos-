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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@welcome');

Route::post('/register', 'HomeController@registro');

Route::get('/register', function(){
            return redirect('/');});

Route::get('/faq', 'HomeController@faq');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
