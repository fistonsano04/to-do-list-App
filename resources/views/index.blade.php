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
        height: 100vh;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .container .title h2{
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
    .container .title h2::after{
        content: '';
        display: block;
        width: 50px;
        height: 3px;
        background-color: #007bff;
        margin: 10px auto;
        border-radius: 5px;
    }
.container .content{
    margin-bottom: 20px;
    padding:20px;
    text-align: justify;
}
.container .content label{
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
.container .content input[type="text"],
.container .content input[type="date"],
.container .content select{
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
.container .content input[type="text"]:focus,
.container .content input[type="date"]:focus,
.container .content select:focus{
    border-color: #007bff;
    outline: none;
}
.container .btn{
    text-align: center;
}
.container .btn button{
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.container .btn button:hover{
    background-color: #0056b3;
}
.container .btn button:active{
    background-color: #004494;
}
.container .btn button:focus{
    outline: none;
}
.container .btn button:focus-visible{
    box-shadow: 0 0 0 2px rgba(0,123,255,0.5);
}

</style>
<body>
    <div class="container">
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

</body>

</html>
