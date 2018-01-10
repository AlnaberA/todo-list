<?php
include("templates/header.php");
?>

<html>
    <body>
        <div class="jumbotron text-center">
            <h1>To-Do List</h1>
            <p>This application allows you to add your daily tasks!</p> 
         </div>
        
        <div class="container" style="width:25%;">
            <div class="panel panel-info">
                <div class="panel-heading">Add a task</div>
                
                <form action="form/addTask.php" method="POST">
                    <div class="panel-body">
                          <label for="title" id="title">Add the title of the task:</label>
                          <input type="text" name="title" value="" class="form-control"/><br/>
                          <label for="description" id="description">Description of the task(Max 255 characters):</label>
                          <input type="text" name="description" value="" class="form-control" maxlength="255"/><br/>
                          <label for="description" > Due date of the task:</label>
                          <input type="text" name="date" id="date" value="" class="form-control" readonly="true"/><br/>
                          <label for="status" > Select a status:</label>
                          <select name="status" id="status" class="form-control">
                                <option value="Pending">Pending</option>
                                <option value="Started">Started</option>
                                <option value="Completed">Completed</option>
                                <option value="Late">Late</option>
                            </select>
                    </div>

                    <div class="panel-footer">
                       <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
