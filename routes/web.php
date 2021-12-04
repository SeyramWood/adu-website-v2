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
Route::get('/study-at-adu', 'PageController@studyAtADU')->name('studyAtADU');
Route::get('/academics', 'PageController@academics')->name('academics');
Route::get('/iilab', 'PageController@iilab')->name('iilab');
Route::get('/student-life', 'PageController@studentLife')->name('studentLife');
