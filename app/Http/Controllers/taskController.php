<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class taskController extends Controller
{
   public function index()
   {

      $tasks = Task::paginate(5);
      return view('index', [
         'tasks' => $tasks
      ]);
   }
}
