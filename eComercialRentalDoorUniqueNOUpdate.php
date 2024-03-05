<?php
	include('conn1.php');
	$ID=$_GET['ID'];
 
	$SuiteUniqueNo=$_POST['SuiteUniqueNo'];
   

 
	mysqli_query($conn,"update `ComercialRentalCalculater` set 

    SuiteUniqueNo='$SuiteUniqueNo'
    where ID='$ID'");
	header('location:ComercialRentalDoorUniqueNoIndex.php');
?>