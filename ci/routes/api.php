<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * #TODOアプリチュートリアル用API
 */
// 1. 空画面
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// 2. 全件取得 APIテスト用（postmanで確認済）
Route::get('/tasks', [TaskController::class, 'index']);
// 3. 登録用API
Route::post('/tasks', [TaskController::class, 'store']);
// 4. 詳細表示用API
Route::get('/tasks/{task}', [TaskController::class, 'show']);
// 5. 更新用API
Route::put('/tasks/{task}', [TaskController::class, 'update']);
// 6. 削除用API
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);