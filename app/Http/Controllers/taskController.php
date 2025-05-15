<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Support\Facades\Log;

class taskController extends Controller
{
    public function index()
    {

        $tasks = Task::paginate(10);
        return view('index', [
            'tasks' => $tasks
        ]);
    }
    public function saveTask(Request $request)
    {



        try {
            $request->validate(
                [
                    'taskName' => 'required|string|max:255',
                    'taskDescription' => 'required|string|max:255',
                    'taskDueDate' => 'required|date',
                    'taskStatus' => 'required|in:pending,in_progress,completed',
                    'taskPriority' => 'required|in:low,medium,high',
                ],
                [
                    'taskName.required' => 'Task name is required',
                    'taskDescription.required' => 'Task description is required',
                    'taskDueDate.required' => 'Task due date is required',
                    'taskStatus.required' => 'Task status is required',
                    'taskPriority.required' => 'Task priority is required',
                ]
            );

            $task = new Task();
            $task->taskName = $request->taskName;
            $task->taskDescription = $request->taskDescription;
            $task->taskDueDate = $request->taskDueDate;
            $task->taskStatus = $request->taskStatus;
            $task->taskPriority = $request->taskPriority;
            $task->save();

            return redirect()->back()->with('success', 'Task created successfully');
        } catch (\Exception $e) {
            Log::error('Error saving task: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred while saving the task.');
        }
    }

    public function deleteTask($id){
        try{
            $task=task::findOrFail($id);
            $task->delete();
            return redirect()->back()->with('success', 'Task deleted successfully');
        }
        catch(\Exception $e){
            Log::error('Error deleting task: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred while deleting the task.');
        }
    }
}
