<?php
include("templates/header.php");

$info = $result->query("SELECT *FROM `pendingtasks`");
$infoArr = array();
while($row=mysql_fetch_assoc($info)){
    array_push($infoArr, $row);
}
print_r($infoArr);

?>
<html>
    <body>
        <div class="jumbotron text-center">
            <h1>To-Do List</h1>
            <p>Pending</p> 
        </div>
        <a href="index.php"> <span style="font-size: 200%;" class="label label-primary">Home</span></a> 
        
    </body>
</html>