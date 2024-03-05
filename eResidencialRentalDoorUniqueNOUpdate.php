<?php
	include('conn1.php');
	$ID=$_GET['ID'];
 
	$SuiteUniqueNo=$_POST['SuiteUniqueNo'];
    
 
	mysqli_query($conn,"update `ResidencialRentalCalculater` set 

    SuiteUniqueNo='$SuiteUniqueNo'
    where ID='$ID'");
	header('location:ResidencialRentalDoorUniqueNoIndex.php');
?>