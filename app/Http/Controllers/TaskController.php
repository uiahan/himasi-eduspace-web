<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('course')->where('user_id', Auth::id())->get();
        if (!$tasks) {
            return response()->json(['message' => 'No tasks found!'], 404);
        }
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $task = $request->validate([
            'submission' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        $task['user_id'] = Auth::id();

        Task::create($task);

        return response()->json(['message' => 'Task created successfully!'], 201);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found!'], 404);
        }
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found!'], 404);
        }

        $data = $request->validate([
            'submission' => 'required|string',
        ]);

        $task->update($data);

        return response()->json(['message' => 'Task updated successfully!']);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json(['message' => 'Task not found!'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted successfully!']);
    }
}
