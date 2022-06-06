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
// default router comment out
// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * #TODO APP チュートリアル実装用
 * ※不要の場合はコメントアウトしてください
 */
Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');