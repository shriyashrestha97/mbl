<?php
include 'Connect.php';

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
	if(isset($_GET['imageID']))
	{
		$id = htmlentities($_GET['imageID']);

		if(!empty($id))
		{
			$con = mysqli_connect("localhost","root","","shriya_db");
			$query = "select id, image from gallery where id=".$id;
			
			if($result = mysqli_query($query, $con))	
			{
				$queryNumRows = mysqli_num_rows($result);
				
				if($queryNumRows == 0)
				{
					echo '<p>No Image with this ID was found</p>';
				}
				else if($queryNumRows == 1)
				{
					$row = mysqli_fetch_array($result);
					echo '<img height="200" width="200" src="data:image;base64,'.$row[1].'">';
				}
			}
			
			mysqli_close($con);
		}
		else 
		{
			echo '<p>You must enter an ID</p>';
		}
	}
}
?>