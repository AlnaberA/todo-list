<?php
include("../config_CLASS.php");
include("../utilities_CLASS.php");

$conn = new config("root","","app1","localhost");


$result = new utilities();

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$status = $_POST['status'];

$result->query("DELETE FROM `latetasks` WHERE id = $id");

if($status == "Pending"){
    $result->query("INSERT INTO `pendingtasks` (`title`,`description`,`date`) VALUES('{$title}','{$description}','{$date}')");
}
else if($status == "Started"){
    $result->query("INSERT INTO `startedtasks` (`title`,`description`,`date`) VALUES('{$title}','{$description}','{$date}')");
}
else if($status == "Completed"){
    $result->query("INSERT INTO `completedtasks` (`title`,`description`,`date`) VALUES('{$title}','{$description}','{$date}')");
}
else{
    $result->query("INSERT INTO `latetasks` (`title`,`description`,`date`) VALUES('{$title}','{$description}','{$date}')");
}
header("Location: ../late.php");