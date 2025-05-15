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

    .container{
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
</style>
<body>
    <div class="container">
        <div class="title">
            <h2>ToDo List</h2>
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

</body>

</html>
