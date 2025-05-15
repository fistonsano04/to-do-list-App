<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ToDo List App</title>
</head>

<body>
    @session('success')
        <div class="alert alert-success">
            <div class="message">
                {{ session('success') }}
            </div>
            <div class="close">
                <span>
                    <i class="fa-solid fa-xmark"></i>

                </span>
            </div>
        </div>
    @endsession
    @session('error')
        <div class="alert alert-danger">
            <div class="message">
                {{ session('error') }}
            </div>
            <div class="close">
                <span>
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </div>
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
                <div class="total">
                    <p>Total Tasks: {{ $tasks->total() }}</p>
                </div>
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
                                <td>{{ $task->taskDueDate->format('d M y') }}</td>
                                <td>
                                    <form action="{{ route('deleteTask', $task->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
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

    <script>
        let close = document.querySelector('.close');
        let alert = document.querySelector('.alert');
        close.addEventListener('click', function() {
            alert.style.display = 'none';
        })
    </script>
</body>

</html>
