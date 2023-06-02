<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update data</title>
	<link rel="stylesheet" href="style.css">
	<style>
		body{
			background: #343434;
		}
	</style>
</head>
<body>
<?php
	require_once("connection.php");

	if(isset($_REQUEST["edit_id"])){
		$editData = $_REQUEST["edit_id"];
	

	$selectQuery = "SELECT * FROM students_reg WHERE id=$editData";
		$runQuery = mysqli_query($conn,$selectQuery);
			while($myData = mysqli_fetch_array($runQuery)){?>

			<div class="continer">
					<form action="editData_core.php" method="POST">
						<h2>UPDATE DATA</h2>
						<div class="underline"></div><br><br>
						<label for="name">Full Name :</label><br>
						<input type="text" name="fname" value="<?php echo $myData['fname']; ?>" required><br>
						<label for="Roll">Roll :</label><br>
						<input type="number" name="roll" value="<?php echo $myData['roll']; ?>" required ><br>
						<label for="Reg">Registration No :</label><br>
						<input type="number" name="reg" value="<?php echo $myData['registration']; ?>" required ><br>

						<input type="hidden" name="edittedId" value="<?php echo $editData; ?>">
						<input type="submit" name="editbutton" value="UPDATE">
					</form>
				</div>
				
			<?php	
			}}
			?>
	
</body>
</html>