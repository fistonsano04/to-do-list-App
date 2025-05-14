<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List App</title>
</head>

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
