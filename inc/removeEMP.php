<?php

if(isset($_GET['id'])) {
	echo 'drugo';
		$id = $_GET['id'];
	require("connect.php");
	
		$query = "DELETE FROM employer WHERE em_id = {$id}";
	
	mysqli_query($conn,$query);
	
		header("Location: ../remove.php");
	
	
}