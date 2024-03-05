<?php
	require_once 'conn.php';
	session_start();
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password_hash = $_POST['password_hash'];
		
	
		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username' AND `password_hash` = '$password_hash'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['user_id']=$fetch['user_id'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='home.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password_hash')</script>";
			echo "<script>window.location='index.php'</script>";
		}
		
	}

?>