<?php
require_once("connection.php");

$getid = $_REQUEST["id"];

$dltquery = "DELETE FROM students_reg WHERE id = $getid";

$runQuery = mysqli_query($conn,$dltquery);
if($runQuery==true){
	header("location:studentList.php?delete=true");
}
?>