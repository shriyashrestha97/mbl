<?php
	$servername = "localhost";
	$username = "firesafety";
	$password = "mblDhn0";
	$dbname = "firesafety_mbl";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['insertimage'])){
		$ins_picture=addslashes(file_get_contents($_FILES['insertpic']['tmp_name']));
		$ins_picture_name=$_FILES['insertpic']['name'];
		$insert_picture = "INSERT INTO imagetable(image, image_name) VALUES ('$ins_picture', '$ins_picture_name')";
		$result_insert_picture = $conn->query($insert_picture); 
		if($result_insert_picture==true)
		{
			$message="Insert image success.";
			echo "<script type='text/javascript'>alert('$message');</script>";			
		}
		else
		{
			$message="Fail to insert image . Please try again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else if(isset($_POST['updateimage'])){
		$upd_picture=addslashes(file_get_contents($_FILES['updatepic']['tmp_name']));
		$upd_picture_name=$_FILES['updatepic']['name'];
		$update_picture = "UPDATE imagedetail SET image='".$upd_picture."', image_name='".$upd_picture_name."' WHERE id=1";
		$result_update_picture = $conn->query($update_picture); 
		if($result_update_picture==true)
		{
			$message="Update profile picture success.";
			echo "<script type='text/javascript'>alert('$message');</script>";			
		}
		else
		{
			$message="Fail to update profile picture. Please try again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MySQL - Insert/ Update BLOB using HTML and PHP</title>
	<style>
		table{
			border: 1px solid black;
			padding: 10px;
			min-width: 400px;
			margin: 100px auto;
		}
		th{
			font-size: 26px;
			padding: 20px;
		}
		td{
			padding: 10px;
			font-size: 20px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<table align="center" cellspacing="10">
		<tr>
			<th colspan="2">
				Insert / Update BLOB using HTML and PHP	(MySQLi Object-oriented)
			</th>
		</tr>
		<tr>
			<td>
				<form action="insert_update_picture.php" method="POST" enctype="multipart/form-data">
					Insert Picture: <input type="file" name="insertpic">
					<br>
					<input type="submit" name="insertimage" value="INSERT">
					<br>
					<hr>
					Update Picture: <input type="file" name="updatepic">
					<br>
					<input type="submit" name="updateimage" value="UPDATE">
				</form>
			</td>
			
		</tr>
		<tr>
			<td colspan="2">
				In the example, update image is apply to image "id=1" in the database.
			</td>
		</tr>
	</table>
</body>
</html>
