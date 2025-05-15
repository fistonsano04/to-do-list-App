<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <title>ToDo List App</title>
</head>

<body>
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    @session('error')
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endsession
    <div class="container">
        <div class="box1">
            <div class="title">
                <h2>ToDo List App</h2>
            </div>
            <div class="content">
                <form action="{{ route('save.task') }}" method="post">
                    @csrf
                    <div class="content">
                        <div>
                            <label for="task">Task:</label>
                            <input type="text" id="task" name="taskName" required>
                        </div>
                        <div>
                            <label for="task">Task Description:</label>
                            <input type="text" id="taskDescription" name="taskDescription" required>
                        </div>
                        <div>
                            <label for="task">Task Status:</label>
                            <select name="taskStatus" id="taskStatus">
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div>
                            <label for="task">Task Priority:</label>
                            <select name="taskPriority" id="taskPriority">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>
                        <div>
                            <label for="task">Task Due Date:</label>
                            <input type="date" name="taskDueDate" id="taskDueDate">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit">Add Task</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="box2">
            <div class="title">
                <h2>Task List</h2>
            </div>
            <div class="result">
                <table>
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Due Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->taskName }}</td>
                                <td>{{ $task->taskDescription }}</td>
                                <td>{{ $task->taskStatus }}</td>
                                <td>{{ $task->taskPriority }}</td>
                                <td>{{ $task->taskDueDate }}</td>
                                <td>
                                    <form action="{{ route('deleteTask', $task->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class="paginate">
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
