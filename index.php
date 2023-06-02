<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
	<style>
		body{
			background: #343434;
		}
	</style>
</head>
<body>

				<!--Registration form code start-->

<div class="continer">
	<form action="action.php" method="POST">
		<h2>REGISTER HERE </h2>
		<div class="underline"></div><br><br>
		<label for="name">Full Name :</label><br>
		<input type="text" name="fname" required autocomplete="off"><br>
		<label for="Roll">Roll :</label><br>
		<input type="number" name="roll" required autocomplete="off"><br>
		<label for="Reg">Registration No :</label><br>
		<input type="number" name="reg" required autocomplete="off"><br>
		<input type="submit" value="SUBMIT">
	</form>
	<?php 
		if(isset($_REQUEST["action"])){
			if($_REQUEST["action"]){
				echo "<h4 style='color:red;text-align:center;'>Registration Faild!</h4>";
			}
		}
		?>
</div>
	
				<!--Registration form code  end-->
</body>
</html>