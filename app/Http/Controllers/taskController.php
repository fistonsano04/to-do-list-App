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
    public function saveTask(Request $request)
    {



        $request->validate(
            [
                'taskName' => 'required|string|max:255',
                'taskDescription' => 'required|string|max:255',
                'taskDueDate' => 'required|date',
                'taskStaus' => 'required|in:pending,in_progress,completed',
                'taskPriority' => 'required|in:low,medium,high',

            ],
            [
                'taskName.required' => 'Task name is required',
                'taskDescription.required' => 'Task description is required',
                'taskDueDate.required' => 'Task due date is required',
                'taskStaus.required' => 'Task status is required',
                'taskPriority.required' => 'Task priority is required',
            ]
        );

        $task = new Task();
        $task->taskName = $request->taskName;
        $task->taskDescription = $request->taskDescription;
        $task->taskDueDate = $request->taskDueDate;
        $task->taskStaus = $request->taskStaus;
        $task->taskPriority = $request->taskPriority;
        $task->save();
        return redirect()->back()->with('success', 'Task created successfully');
    }
}
