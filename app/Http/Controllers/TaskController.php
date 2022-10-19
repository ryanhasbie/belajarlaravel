<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', 
        [
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(TaskRequest $request)
    {
        // Task::create([
        //     'list' => $request->list,
        // ]);

        Task::create($request->all());

        return back();
        
    }

    public function edit(Task $task)
    {
        // $tasks = Task::where('id', $id)->first();
        // $tasks = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {
        // Task::where('id', $id)->update(['list' => $request->list]);
        Task::find($id)->update(['list' => $request->list]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        // Task::where('id', $id)->delete();
        Task::find($id)->delete();
        return back();
    }
}
