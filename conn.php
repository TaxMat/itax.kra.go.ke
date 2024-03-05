<?php
	$conn = mysqli_connect("localhost", "root", "", "db_user_login");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>