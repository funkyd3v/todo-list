<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks', ['tasks' => Task::latest()->paginate()]);
    }

    public function show($id)
    {
        return view('show', ['task' => Task::findOrFail($id)]);
    }
    
    public function create()
    {
        return view('create');
    }

    public function store(TaskRequest $request)
    {
        Task::storeData($request);
        return redirect()->back()->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        return view('edit', ['task' => Task::findOrFail($id)]);
    }

    public function update(TaskRequest $request)
    {
        Task::updateData($request);
        return redirect()->to('/')->with('success', 'Task updated successfully.');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->to('/')->with('success', 'Task Deleted Successfully');
    }

    public function toogleComplete($id)
    {
        Task::toogleComplete($id);
        return redirect()->back()->with('success', 'Task updated!');
    }
}
