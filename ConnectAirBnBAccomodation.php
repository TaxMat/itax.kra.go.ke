
<?php
$dbhost1 = "localhost";
$dbusername1 = "root";
$dbpassword1 = "";
$dbname1 = "itaxrental";
$dbconnection1 = mysqli_connect($dbhost1, $dbusername1, $dbpassword1, $dbname1);

$dbhost2 = "localhost";
$dbusername2 = "root";
$dbpassword2 = "";
$dbname2 = "project";
$dbconnection2 = mysqli_connect($dbhost2, $dbusername2, $dbpassword2, $dbname2);

$dbhost3 = "localhost";
$dbusername3 = "root";
$dbpassword3 = "";
$dbname3 = "BackUpSever";
$dbconnection3 = mysqli_connect($dbhost3, $dbusername3, $dbpassword3, $dbname3);

if(!$dbconnection1 || !$dbconnection2 || !$dbconnection3)
{
    die("Database connection error: " . mysqli_connect_error());
}

    $KRAPIN = $_POST['KRAPIN'];
    $PlotNo = $_POST['PlotNo'];
    $FloorNo = $_POST['FloorNo'];
    $SuiteNo = $_POST['SuiteNo'];
    $BlockName = $_POST['BlockName'];
    $SuiteUniqueNo = $_POST['SuiteUniqueNo'];

    $Bank1PayBillNO1 = $_POST['Bank1PayBillNO1'];
    $Bank1AccountNO1 = $_POST['Bank1AccountNO1'];

    $BankSwiftCode = $_POST['BankSwiftCode'];
    $BankName = $_POST['BankName'];
    $KRABankSwiftCode = $_POST['KRABankSwiftCode'];
    $KRABankName = $_POST['KRABankName'];
    $MaintenanceBankSwiftCode = $_POST['MaintenanceBankSwiftCode'];
    $MaintenanceBankName = $_POST['MaintenanceBankName'];
    
    $GrossRent = $_POST['GrossRent'];
    $NetRent = $_POST['NetRent'];
    $TAXRate = $_POST['TAXRate'];
    $TaxValue = $_POST['TaxValue'];
    $MaintnceFeeRate = $_POST['MaintnceFeeRate'];
    $TaxAvailable = $_POST['TaxAvailable'];
    $Bank2PayBillNO2 = $_POST['Bank2PayBillNO2'];
    $Bank2AccountNO2 = $_POST['Bank2AccountNO2'];
    $MaintenanceFee = $_POST['MaintenanceFee'];
    $Bank3PayBillNO3 = $_POST['Bank3PayBillNO3'];
    $Bank3AccountNO3 = $_POST['Bank3AccountNO3'];
    $Door = $_POST['Door'];

    $TENANTKRAPIN = $_POST['TENANTKRAPIN'];
    $IDNO = $_POST['IDNO'];
    $PassPortNO = $_POST['PassPortNO'];
    $Nationality = $_POST['Nationality'];
    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $ContactNO = $_POST['ContactNO'];

    $DailyGrossRent = $_POST['DailyGrossRent'];
    $JoinedDate = $_POST['JoinedDate'];
    $ExitDate = $_POST['ExitDate'];

$query1 = "INSERT INTO AirBBAccomodationCalculater (KRAPIN,PlotNo,FloorNo,SuiteNo,BlockName,SuiteUniqueNo,
BankSwiftCode,BankName, Bank1PayBillNO1,Bank1AccountNO1,GrossRent,NetRent,TAXRate,TaxValue,MaintnceFeeRate,TaxAvailable,
KRABankSwiftCode,KRABankName,MaintenanceBankSwiftCode,MaintenanceBankName,
Bank2PayBillNO2,Bank2AccountNO2,MaintenanceFee,Bank3PayBillNO3,Bank3AccountNO3,Door,
TENANTKRAPIN,IDNO,PassPortNO,Nationality,LastName,FirstName,ContactNO,JoinedDate,ExitDate,DailyGrossRent)
 VALUE ('$KRAPIN','$PlotNo','$FloorNo','$SuiteNo','$BlockName','$SuiteUniqueNo',
        '$BankSwiftCode','$BankName','$Bank1PayBillNO1','$Bank1AccountNO1','$GrossRent','$NetRent','$TAXRate','$TaxValue','$MaintnceFeeRate','$TaxAvailable',
        '$KRABankSwiftCode','$KRABankName','$MaintenanceBankSwiftCode','$MaintenanceBankName',
        '$Bank2PayBillNO2','$Bank2AccountNO2','$MaintenanceFee','$Bank3PayBillNO3','$Bank3AccountNO3','$Door',
        '$TENANTKRAPIN','$IDNO','$PassPortNO','$Nationality','$LastName','$FirstName','$ContactNO','$JoinedDate','$ExitDate','$DailyGrossRent')";

mysqli_query($dbconnection1, $query1);

$query2 = "INSERT INTO AirBBAccomodationCalculater (KRAPIN,PlotNo,FloorNo,SuiteNo,BlockName,SuiteUniqueNo,
BankSwiftCode,BankName, Bank1PayBillNO1,Bank1AccountNO1,GrossRent,NetRent,TAXRate,TaxValue,MaintnceFeeRate,TaxAvailable,
KRABankSwiftCode,KRABankName,MaintenanceBankSwiftCode,MaintenanceBankName,
Bank2PayBillNO2,Bank2AccountNO2,MaintenanceFee,Bank3PayBillNO3,Bank3AccountNO3,Door,
TENANTKRAPIN,IDNO,PassPortNO,Nationality,LastName,FirstName,ContactNO,JoinedDate,ExitDate,DailyGrossRent)

 VALUE ('$KRAPIN','$PlotNo','$FloorNo','$SuiteNo','$BlockName','$SuiteUniqueNo',
        '$BankSwiftCode','$BankName','$Bank1PayBillNO1','$Bank1AccountNO1','$GrossRent','$NetRent','$TAXRate','$TaxValue','$MaintnceFeeRate','$TaxAvailable',
        '$KRABankSwiftCode','$KRABankName','$MaintenanceBankSwiftCode','$MaintenanceBankName',
        '$Bank2PayBillNO2','$Bank2AccountNO2','$MaintenanceFee','$Bank3PayBillNO3','$Bank3AccountNO3','$Door',
        '$TENANTKRAPIN','$IDNO','$PassPortNO','$Nationality','$LastName','$FirstName','$ContactNO','$JoinedDate','$ExitDate','$DailyGrossRent')";

mysqli_query($dbconnection2, $query2);

$query3 = "INSERT INTO AirBBAccomodationCalculaterBackUp (KRAPIN,PlotNo,FloorNo,SuiteNo,BlockName,SuiteUniqueNo,
BankSwiftCode,BankName, Bank1PayBillNO1,Bank1AccountNO1,GrossRent,NetRent,TAXRate,TaxValue,MaintnceFeeRate,TaxAvailable,
KRABankSwiftCode,KRABankName,MaintenanceBankSwiftCode,MaintenanceBankName,
Bank2PayBillNO2,Bank2AccountNO2,MaintenanceFee,Bank3PayBillNO3,Bank3AccountNO3,Door,
TENANTKRAPIN,IDNO,PassPortNO,Nationality,LastName,FirstName,ContactNO,JoinedDate,ExitDate,DailyGrossRent)

 VALUE ('$KRAPIN','$PlotNo','$FloorNo','$SuiteNo','$BlockName','$SuiteUniqueNo',
        '$BankSwiftCode','$BankName','$Bank1PayBillNO1','$Bank1AccountNO1','$GrossRent','$NetRent','$TAXRate','$TaxValue','$MaintnceFeeRate','$TaxAvailable',
        '$KRABankSwiftCode','$KRABankName','$MaintenanceBankSwiftCode','$MaintenanceBankName',
        '$Bank2PayBillNO2','$Bank2AccountNO2','$MaintenanceFee','$Bank3PayBillNO3','$Bank3AccountNO3','$Door',
        '$TENANTKRAPIN','$IDNO','$PassPortNO','$Nationality','$LastName','$FirstName','$ContactNO','$JoinedDate','$ExitDate','$DailyGrossRent')";

mysqli_query($dbconnection3, $query3);

mysqli_close($dbconnection1);
mysqli_close($dbconnection2);
mysqli_close($dbconnection3);

            header("location: AirB&BAccomodationCalculater.php");
            die;

        echo "<script type='text/javascript'> alert('Please Enter some Valid Information') </script>";
  
 
?>
   

 