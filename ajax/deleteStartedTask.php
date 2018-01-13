<?php
include("../config_CLASS.php");
include("../utilities_CLASS.php");
$conn = new config("root","","app1","localhost");
$result = new utilities();
$id = $_POST['id'];

$result->query("DELETE FROM `startedtasks` WHERE id = $id");