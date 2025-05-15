<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
class taskController extends Controller
{
   public function index(){
    $tasks=task::paginate(5);
return view('index', compact('tasks'));
   }
}
