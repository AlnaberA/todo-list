<?php
include("utilities_CLASS.php");
$dbHost = $_GET['dbHost'];
$dbUser = $_GET['dbUser'];
$password = $_GET['dbPass'];

echo $dbHost."<br/>";
echo $dbUser."<br/>";
echo $password."<br/>";
// Create connection via get method, passed from the url
$conn = mysqli_connect($dbHost, $dbUser, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$createDbSql = "CREATE DATABASE app1";
if (mysqli_query($conn, $createDbSql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


$t1 = "CREATE TABLE `app1`.`pendingtasks` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `date` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
$t2 = "CREATE TABLE `app1`.`startedtasks` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `date` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
$t3 = "CREATE TABLE `app1`.`latetasks` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `date` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
$t4 = "CREATE TABLE `app1`.`completedtasks` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `date` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

$t1Result = mysqli_query($conn,$t1);
$t2Result = mysqli_query($conn,$t2);
$t3Result = mysqli_query($conn,$t3);
$t4Result = mysqli_query($conn,$t4);

if(!($t1Result)){
	echo "T1 failed.";
}
if(!($t2Result)){
	echo "T2 failed.";
}
if(!($t3Result)){
	echo "T3 failed.";
}
if(!($t4Result)){
	echo "T4 failed.";
}
mysqli_close($conn);
?>

<a href="index.php"><p>Return to main page everything is setup!</p></a>
