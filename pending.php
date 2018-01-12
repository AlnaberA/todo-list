<?php
include("templates/header.php");

$info = $result->query("SELECT *FROM `pendingtasks`");
$infoArr = array();
while($row=mysql_fetch_assoc($info)){
    array_push($infoArr, $row);
}
//Testing if array has correct information.
//print_r($infoArr);

?>
<html>
    <body>
        <div class="jumbotron text-center">
            <h1>To-Do List</h1>
            <p>Pending</p> 
        </div>
    <center><a href="index.php"> <span style="font-size: 200%;" class="label label-primary">Home</span></a></center>
    
   <table id="pendingTable" class="table table-bordered table-striped">
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
            </thead>
            <tbody>
                <?php 
                     foreach($infoArr as $data) {
                ?>    
                <tr>
                   <td><?php echo $data['title'];?></td>
                   <td><?php echo $data['description'];?></td>
                   <td><?php echo $data['date'];?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    
    </body>
</html>