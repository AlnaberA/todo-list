<?php
include("templates/header.php");
?>

<html>
    <body>
        <div class="jumbotron text-center">
            <h1>To-Do List</h1>
            <p>This application allows you to add your daily tasks!</p> 
         </div>
        
        <div class="container">
            <div class="panel panel-info">
                <div class="panel-heading">Add a task</div>
                
                <form action="form/addTask.php" method="POST">
                    <div class="panel-body">
                       
                    </div>

                    <div class="panel-footer">
                       <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
