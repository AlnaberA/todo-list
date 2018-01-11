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
   <?php
    //mysql_result — Get result data second param. is not needed so leave it 0.(used for row identifier) 
        $pendingSql="SELECT count(*) FROM `pendingtasks`";
        $pendingTotal = mysql_result($result->query($pendingSql),0);

        $startedSql = "SELECT count(*) FROM `startedtasks`";
        $startedTotal = mysql_result($result->query($startedSql),0);
        
        $completedSql = "SELECT count(*) FROM `completedtasks`";
        $completedTotal = mysql_result($result->query($completedSql),0);
        
        $lateSql = "SELECT count(*) FROM `latetasks`";
        $lateTotal = mysql_result($result->query($lateSql),0);
        
//          echo "Total Pending:".$pendingTotal."<br/>";
//          echo "Total Starting:".$startedTotal."<br/>";
//          echo "Total Completed:".$completedTotal."<br/>";
//          echo "Total Late:".$lateTotal."<br/>";
   ?> 
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="pending.php"> <span style="font-size: 200%;" class="label label-primary">Pending: <?php echo $pendingTotal?></span></a> 
                </div>

                <div class="col-md-3">
                    <a href="started.php"> <span style="font-size: 200%;" class="label label-primary">Started: <?php echo $startedTotal?></span></a> 
                </div>

                <div class="col-md-3">
                    <a href="completed.php"> <span style="font-size: 200%;" class="label label-primary">Completed: <?php echo $completedTotal?></span></a> 
                </div>

                <div class="col-md-3">
                    <a href="late.php"> <span style="font-size: 200%;" class="label label-primary">Late: <?php echo $lateTotal?></span></a>
                </div>
            </div>
        </div>
    </center>
    </body>
</html>
