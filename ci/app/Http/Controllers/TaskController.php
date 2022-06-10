<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 2. 全件取得 APIテスト用（postmanで確認済）
    public function index()
    {
        return Task::all();
    }
    // 3. 登録用API
    public function store(Request $request)
    {
        return Task::create($request->all());
    }
    // 4. 詳細表示用API
    public function show(Task $task)
    {
        return $task;
    }
    // 5. 更新用API
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }
    // 6. 削除用API
    public function destroy(Task $task)
    {
        $task->delete();
        return $task;
    }
}
