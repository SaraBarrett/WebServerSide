<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){
        $tasks = $this-> getAllTasks();


        return view('tasks.all_tasks', compact('tasks'));
    }

    protected function getAllTasks(){
        $tasks = DB::table('tasks')
        ->select('tasks.*', 'users.name as usname')
        ->join('users', 'users.id', '=', 'tasks.user_id')
        ->get();

        //dd($tasks);

        return  $tasks;

    }

    public function addTask(){
        $users = DB::table('users')->get();

        return view('tasks.add_task', compact('users'));
    }

    public function createTask(Request $request){
        $request->validate([
            'name' => 'required|string|max:10',
            'description' => 'required|string|max:255',
            'user_id' => 'required'
        ]);

        DB::table('tasks')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);


        return redirect()->route('tasks.all')->with('message', 'Tarefa adicionada com sucesso!');
    }
}
