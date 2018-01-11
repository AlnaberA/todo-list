<?php
include("../config_CLASS.php");
include("../utilities_CLASS.php");

$conn = new config("root","","app1","localhost");


$result = new utilities();


//Use str replace to prevent ' from breaking field
$title = str_replace("'", "&#39;",  $_POST['title']);
$description = str_replace("'", "&#39;",  $_POST['description']);
$date = str_replace("'", "&#39;",  $_POST['date']);
$status = str_replace("'", "&#39;",  $_POST['status']);

echo $title."<br/>";
echo $description."<br/>";
echo $date."<br/>";
echo $status."<br/>";

/*The better method to insert is to have a column for status, but requirements stated we need 3+ tables*/
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