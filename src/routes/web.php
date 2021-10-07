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


//Nuxt用API
Route::get('api/tasks', 'TaskController@index');
Route::post('api/tasks', 'TaskController@store');
Route::get('api/tasks/{task}', 'TaskController@show');
Route::put('api/tasks/{task}', 'TaskController@update');
Route::delete('api/tasks/{task}', 'TaskController@destroy');

// //SSRテスト用
Route::get('/api', function () { return 'Laravel×NuxtでSSR（サーバーサイドレンダリング）(·:ﾟдﾟ:·)ﾊｧﾊｧ'; });

//SQL勉強用
Route::get('/data', 'UserDataController@getprojects');

//デバッグ勉強用
Route::get('/debug', 'TestController@hoge');

//上記以外例外用
Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');


