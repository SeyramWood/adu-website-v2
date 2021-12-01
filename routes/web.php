<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/config', function () {
  Artisan::call('config:clear');
  Artisan::call('cache:clear');
  Artisan::call('config:cache');
  Artisan::call('storage:link');
  // Artisan::call('route:cache');
  return 'Done';
});

Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/admissions', 'PageController@admissions')->name('admissions');
Route::get('/academics', 'PageController@academics')->name('academics');
Route::get('/ilab', 'PageController@ilab')->name('ilab');
Route::get('/studentlife', 'PageController@studentlife')->name('studentlife');
