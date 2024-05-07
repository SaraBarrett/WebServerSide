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

        //if has an id, it's an update
        if(isset($request->id)){
            $request->validate([
                'name' => 'required|string|max:10',
                'description' => 'required|string|max:255',
                'due_at' => 'date',
            ]);

            db::table('tasks')->where('id', $request->id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'due_at' => $request->due_at,
            ]);
            return redirect()->route('tasks.all')->with('message', 'Tarefa actualizada com sucesso!');

        }else{
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

    public function editTask($id){
        $task = db::table('tasks')
        ->where('id', $id)
        ->first();


        $allUsers = DB::table('users')->get();

        return view('tasks.edit', compact('task', 'allUsers'));
    }
}
