<?php
	include('conn1.php');
	$ID=$_GET['ID'];
 
	$SuiteUniqueNo=$_POST['SuiteUniqueNo'];
   
 
	mysqli_query($conn,"update `OpenSpaceRentalCalculater` set 

    SuiteUniqueNo='$SuiteUniqueNo'
    where ID='$ID'");
	header('location:OpenSpaceRentalDoorUniqueNoIndex.php');
?>