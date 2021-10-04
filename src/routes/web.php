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


Route::get('api/tasks', 'TaskController@index');
Route::post('api/tasks', 'TaskController@store');
Route::get('api/tasks/{task}', 'TaskController@show');
Route::put('api/tasks/{task}', 'TaskController@update');
Route::delete('api/tasks/{task}', 'TaskController@destroy');

Route::get('/api', function () { return 'Laravel×NuxtでSSR（サーバーサイドレンダリング）(·:ﾟдﾟ:·)ﾊｧﾊｧ'; });

Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');


