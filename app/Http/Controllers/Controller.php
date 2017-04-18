<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Task;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
//      $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
//      return $tasks;
        return view('tasks/index',compact('tasks'));
    }

    public function show(Task $task){
//      $task = DB::table('tasks')->find($id);
//      $task = Task::find($id);
//      dd($task);
        return view('tasks/show',compact('task'));
    }
}
