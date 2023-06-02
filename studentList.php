<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student List</title>
	<link rel="stylesheet" href="style.css">
	<style> 
		body{
			 /*background: #343434;*/
		}
	</style>
</head>
<body>
	<!-- table section start -->
		<h1 class="pgTitle">REGISTRATION LIST</h1>
		<a href='index.php' style='margin:127px; color:black;'>Back to registration form</a>
		<?php 
			if(isset($_REQUEST["action"])){
				if($_REQUEST["action"]){
					echo "<h4 style='color:green;margin: 5px 127px;'>Registration Successful</h4>";
				}
			}
			if(isset($_REQUEST["delete"])){
				if($_REQUEST["delete"]){
					echo "<h4 style='color:red;margin: 5px 127px;'>Delete Successful</h4>";
				}
			}
			if(isset($_REQUEST["update"])){
				if($_REQUEST["update"]){
					echo "<h4 style='color:green;margin: 5px 127px;'>Update Successful</h4>";
				}
			}
		?>

		<table class="content-table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Roll</th>
					<th>Reginstration</th>
					<th>Action</th>
				</tr>
				
			</thead>

			<tbody>
				<?php
				require_once("connection.php");

				$selectQuery = "SELECT * FROM students_reg";
				$runQuery = mysqli_query($conn,$selectQuery);

				if($runQuery==true){
					while($myData = mysqli_fetch_array($runQuery)){?>

						<tr>
							<td><?php echo $myData["id"]; ?></td>
							<td><?php echo $myData["fname"]; ?></td>
							<td><?php echo $myData["roll"]; ?></td>
							<td><?php echo $myData["registration"]; ?></td>
							<td> <button style="background: green;"><a href="editData.php?edit_id=<?php echo $myData["id"]; ?>">Edit</a></button> 
								<button><a onclick="return confirm('Are you sure you want to delete this item?');" href="delet.php?id=<?php echo $myData["id"]; ?>">Delete</a></button></td>
				<?php	}
				}
				?>
			</tbody>
		</table>		


	
</body>
</html>