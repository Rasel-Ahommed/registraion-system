<?php
require_once("connection.php");
if(isset($_REQUEST["editbutton"])){

$fname = $_REQUEST['fname'];
$roll = $_REQUEST['roll'];
$reg = $_REQUEST['reg'];
$edittedId = $_REQUEST['edittedId'];

$upquery = "UPDATE students_reg SET fname='$fname' , roll= '$roll' , registration= '$reg' WHERE id=$edittedId ";

$runQuery = mysqli_query($conn,$upquery);

if($runQuery==true){
	header("location:studentList.php?update=true");
}


}

?>