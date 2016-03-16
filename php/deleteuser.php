<?php

	

		$delete = $_POST['delete'];
		include('connect.php');
		$query2 = "DELETE FROM `contacts` WHERE `id` = '$delete'";
		$result2 = mysqli_query($con, $query2);

		if ($result2) {
			header('location:../index.php');
		} else {
			echo "could not delete";
		}

		
	 

?>