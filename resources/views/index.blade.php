<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List App</title>
</head>
<style>
    *{
        padding:0;
        margin:0;
        box-sizing: border-box;
        transiition: all 0.3s ease;
    }
    body{
        background-color: #f0f0f0;
        font-family: 'poppins', sans-serif;
    }

    .box1{
        width: 100%;
        max-width: 600px;
        height: 100vh;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .box1 .title h2{
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    .box1 .title h2::after{
        content: '';
        display: block;
        width: 50px;
        height: 3px;
        background-color: #007bff;
        margin: 10px auto;
        border-radius: 5px;
    }
.box1 .content{
    margin-bottom: 20px;
    padding:20px;
    text-align: justify;
}
.box1 .content label{
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.box1 .content input[type="text"],
.box1 .content input[type="date"],
.box1 .content select{
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
.box1 .content input[type="text"]:focus,
.box1 .content input[type="date"]:focus,
.box1 .content select:focus{
    border-color: #007bff;
    outline: none;
}
.box1 .btn{
    text-align: center;
}
.box1 .btn button{
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.box1 .btn button:hover{
    background-color: #0056b3;
}
.box1 .btn button:active{
    background-color: #004494;
}
.box1 .btn button:focus{
    outline: none;
}
.box1 .btn button:focus-visible{
    box-shadow: 0 0 0 2px rgba(0,123,255,0.5);
}

</style>
<body>
    <div class="container">
    <div class="box1">
        <div class="title">
            <h2>ToDo List App</h2>
        </div>
        <div class="content">
            <form action="" method="post">
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
        <div class="result">
            <h2>Task List</h2>
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
                    @foreach($tasks as $task)
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
                {{$tasks->links}}
            </div>
        </div>
    </div>
</div>
</body>

</html>
