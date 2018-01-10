<?php
include("config_CLASS.php");
include("utilities_CLASS.php");

$conn = new config("root","","app1","localhost");

//Testing query function
//$result = new utilities();
//$result->query("");

?>
<!DOCTYPE html>
<head>
<title>To-do</title>
    <!--Some meta tags are required for bootstrap-->
    <meta charset="UTF-8"><!--specifies character set website written with; Defined by Unicode standard-->
    <meta name="description" content="todo-application">
    <meta name="author" content="Alaa">

     <!--Bootstrap and Jquery scripts and style sheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!--Date picker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <!--My Style sheet and scripts-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
</head>