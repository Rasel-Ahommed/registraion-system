<?php

require_once("connection.php");

$fname = $_POST["fname"];
$roll = $_POST["roll"];
$reg = $_POST["reg"];

$insartQuery = "INSERT INTO students_reg(fname,roll,registration) VALUES ('$fname','$roll','$reg') ";
$runQuery = mysqli_query($conn, $insartQuery );
if($runQuery == true){
	header("location:studentList.php?action=true");
}	
else{
	header("location:index.php?action=false");
}