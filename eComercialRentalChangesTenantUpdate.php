<?php
	include('conn1.php');
	$ID=$_GET['ID'];
 
	$SuiteUniqueNo=$_POST['SuiteUniqueNo'];
    $Door=$_POST['Door'];
	$KRAPIN=$_POST['KRAPIN'];
    $PlotNo=$_POST['PlotNo'];
	$FloorNo=$_POST['FloorNo'];
    $SuiteNo=$_POST['SuiteNo'];
	$Bank1PayBillNO1=$_POST['Bank1PayBillNO1'];
    $Bank1AccountNO1=$_POST['Bank1AccountNO1'];
	$GrossRent=$_POST['GrossRent'];

    $NetRent=$_POST['NetRent'];
	$TAXRate=$_POST['TAXRate'];
    $TaxValue=$_POST['TaxValue'];
	$MaintnceFeeRate=$_POST['MaintnceFeeRate'];
    $TaxAvailable=$_POST['TaxAvailable'];
	$MaintenanceFee=$_POST['MaintenanceFee'];

    $TENANTKRAPIN=$_POST['TENANTKRAPIN'];
	$IDNO=$_POST['IDNO'];
    $PassPortNO=$_POST['PassPortNO'];
	$Nationality=$_POST['Nationality'];
    $LastName=$_POST['LastName'];
	$FirstName=$_POST['FirstName'];
    $ContactNO=$_POST['ContactNO'];
    $JoinedDate=$_POST['JoinedDate'];
	$ExitDate=$_POST['ExitDate'];
 
	mysqli_query($conn,"update `ComercialRentalCalculater` set 

    SuiteUniqueNo='$SuiteUniqueNo', KRAPIN='$KRAPIN',
    PlotNo='$PlotNo', FloorNo='$FloorNo',
    SuiteNo='$SuiteNo', Bank1PayBillNO1='$Bank1PayBillNO1',
    Bank1AccountNO1='$Bank1AccountNO1', GrossRent='$GrossRent',

    TENANTKRAPIN='$TENANTKRAPIN', IDNO='$IDNO',Door='$Door',
    PassPortNO='$PassPortNO', Nationality='$Nationality',
    LastName='$LastName', FirstName='$FirstName',
    JoinedDate='$JoinedDate', ExitDate='$ExitDate',
    ContactNO='$ContactNO',

    NetRent='$NetRent', TAXRate='$TAXRate',
    TaxValue='$TaxValue', MaintnceFeeRate='$MaintnceFeeRate',
    TaxAvailable='$TaxAvailable', MaintenanceFee='$MaintenanceFee'
    where ID='$ID'");
	header('location:eComercialRentalChangesTenantIndex.php');
?>