<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    public function index(){
        //return view('task.index');
        //$tasks = Task::all();
        $tasks = DB::table('tasks')->get();
        return view('task.index', compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(TaskRequest $request){
        //$validatedData = $request->validated();
        //Task::create($validatedData);
         DB::table('tasks')->insert([
             'name' => $request->input('name'),
             'description' => $request->input('description'),
         ]);
        return redirect('/task');
        //return view('task.create');
    }

    public function show(Task $task){
        return view('task.show', compact('task'));
    }

    public function edit(Task $task){
        return view('task.edit', compact('task'));
    }

    // public function update(UpdateTaskRequest $request, Task $task){
    //      $validatedData = $request->validated();
    //      $task->update($validatedData);
    //     return redirect("/task/{$task->id}");
    // }

    public function update(UpdateTaskRequest $request, $id){
        DB::table('tasks')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect("/task/{$id}");
    }

    // public function delete(Task $task){
    //     $task->delete();
    //     return redirect('/task');
    // }

    public function delete($id){
        DB::table('tasks')->where('id', $id)->delete();
        return redirect('/task');
    }
}
