<?php
include("templates/header.php");

$info = $result->query("SELECT *FROM `latetasks`");
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
            <p>Late</p> 
        </div>
    <center><a href="index.php"> <span style="font-size: 200%;" class="label label-primary">Home</span></a></center>
    
   <table id="lateTable" class="table table-bordered table-striped">
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Delete</th>
                <th>Change Status</th>
            </thead>
            <tbody>
                <?php 
                     foreach($infoArr as $data) {
                ?>    
                <tr>
                   <td><?php echo $data['title'];?></td>
                   <td><?php echo $data['description'];?></td>
                   <td><?php echo $data['date'];?></td>
                   <td class='view' style='width: 10%;text-align: center;'><button id='del_lateTask_btn' class='del_lateTask_btn btn btn-danger' data-id="<?php echo $data['id']; ?>">x</button></td> 
                   <td>
                       <select name="statusPending" id="statusLate" class="statusLate form-control" data-id="<?php echo $data['id']; ?>" data-info1="<?php echo $data['title'];?>" data-info2="<?php echo $data['description'];?>" data-info3="<?php echo $data['date'];?>">
                                <option value="Pending">Pending</option>
                                <option value="Started">Started</option>
                                <option value="Completed">Completed</option>
                                <option value="Late" selected>Late</option>
                        </select>
                   </td> 
                   
                </tr>
                <?php }?>
            </tbody>
        </table>
    
    </body>
</html>