<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $KRAPIN = $_POST['KRAPIN'];
    $PlotNo = $_POST['PlotNo'];
    $BranchNO = $_POST['BranchNO'];
    $BranchName = $_POST['BranchName'];
    $BussRegName = $_POST['BussRegName'];
    
    $SuiteNo = $_POST['SuiteNo'];
    $WING = $_POST['WING'];
    $SuiteUniqueNo = $_POST['SuiteUniqueNo'];
    
    $HotelBankSwiftCode = $_POST['HotelBankSwiftCode'];
    $HotelBankName = $_POST['HotelBankName'];
    $HotelMPESABusinessNo = $_POST['HotelMPESABusinessNo'];
    $HotelBankAccNo = $_POST['HotelBankAccNo'];

    $TAXRate = $_POST['TAXRate'];
    $TaxValue = $_POST['TaxValue'];
    $MaintnceFeeRate = $_POST['MaintnceFeeRate'];
    $DailyGross = $_POST['DailyGross'];
    $Nights = $_POST['Nights'];
    $TotalGrossOnOtherExpence = $_POST['TotalGrossOnOtherExpence'];
    $TotalNet = $_POST['TotalNet'];
    $SumNet = $_POST['SumNet'];
    
    $TotalTaxValue = $_POST['TotalTaxValue'];
    $TotalTaxAvailable = $_POST['TotalTaxAvailable'];
    $TotalGross = $_POST['TotalGross'];
    $TotalMaintenanceFee = $_POST['TotalMaintenanceFee'];
    $TotalZeroRated = $_POST['TotalZeroRated'];
    
    $KRABankSwiftCode = $_POST['KRABankSwiftCode'];
    $KRABankName = $_POST['KRABankName'];
    $KRAMPESABusinessNo = $_POST['KRAMPESABusinessNo'];
    $KRABankAccNO = $_POST['KRABankAccNO'];
   

    $MaintenanceBankSwiftCode = $_POST['MaintenanceBankSwiftCode'];
    $MaintenanceBankName = $_POST['MaintenanceBankName'];
    $MaintenanceMPESABusinessNo = $_POST['MaintenanceMPESABusinessNo'];
    $MaintenanceBankAccNo = $_POST['MaintenanceBankAccNo'];

    $Door = $_POST['Door'];
    $TENANTKRAPIN = $_POST['TENANTKRAPIN'];
    $IDNO = $_POST['IDNO'];
    $PassPortNO = $_POST['PassPortNO'];
    $Nationality = $_POST['Nationality'];
    $LastName = $_POST['LastName'];
    $FirstName = $_POST['FirstName'];
    $ContactNO = $_POST['ContactNO'];
    $JoinedDate = $_POST['JoinedDate'];
    $ExitDate = $_POST['ExitDate'];
  

    if(!empty($KRAPIN))
    {
        $query = "insert into HotelAccomodationCalculater (KRAPIN,PlotNo,BranchNO,SuiteNo,BranchName,WING,SuiteUniqueNo,
        HotelBankSwiftCode,HotelBankName, HotelMPESABusinessNo,HotelBankAccNo,TAXRate,TaxValue,MaintnceFeeRate,
        TotalNet,TotalTaxValue,TotalGross,TotalTaxAvailable,TotalMaintenanceFee,TotalZeroRated,SumNet,BussRegName,
        KRABankSwiftCode,KRABankName,MaintenanceBankSwiftCode,MaintenanceBankName,DailyGross,Nights,TotalGrossOnOtherExpence,
        KRAMPESABusinessNo,KRABankAccNO,MaintenanceMPESABusinessNo,MaintenanceBankAccNo,Door,
        TENANTKRAPIN,IDNO,PassPortNO,Nationality,LastName,FirstName,ContactNO,JoinedDate,ExitDate)
        Values ('$KRAPIN','$PlotNo','$BranchNO','$SuiteNo','$BranchName','$WING','$SuiteUniqueNo',
        '$HotelBankSwiftCode','$HotelBankName','$HotelMPESABusinessNo','$HotelBankAccNo','$TAXRate','$TaxValue','$MaintnceFeeRate',
        '$TotalNet','$TotalTaxValue','$TotalGross','$TotalTaxAvailable','$TotalMaintenanceFee','$TotalZeroRated','$SumNet','$BussRegName',
        '$KRABankSwiftCode','$KRABankName','$MaintenanceBankSwiftCode','$MaintenanceBankName','$DailyGross','$Nights','$TotalGrossOnOtherExpence',
        '$KRAMPESABusinessNo','$KRABankAccNO','$MaintenanceMPESABusinessNo','$MaintenanceBankAccNo','$Door',
        '$TENANTKRAPIN','$IDNO','$PassPortNO','$Nationality','$LastName','$FirstName','$ContactNO','$JoinedDate','$ExitDate')";

        mysqli_query($con,$query);
        {
            header("location: HotelAccomodationCalculater.php");
            die;
        }
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some Valid Information') </script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Kenya Revenue Authority</title>
        <link rel="icon" type="image/x-icon" href="kra.png">
        <link rel="stylesheet" href="style.css">
   
        <script type="text/javascript" src="jquery-3.7.1.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#TAXRate,#DailyGross,#Nights,#TotalGrossOnOtherExpence,#VATRate,#VATMaintnceFeeRate,#TotalZeroRated").keyup(function(){

                  
                    var TaxValue =0;
                    var a = Number($("#DailyGross").val());
                    var d = Number($("#TAXRate").val());
                    var TaxValue = a * d;
                    $('#TaxValue').val(TaxValue);

                    var TotalTaxValueAccomodation =0;
                    var c = Number($("#TaxValue").val());
                    var b = Number($("#Nights").val());
                    var TotalTaxValueAccomodation = c * b;
                    $('#TotalTaxValueAccomodation').val(TotalTaxValueAccomodation);

                    var TotalGrossOnAccomodation =0;
                    var a = Number($("#DailyGross").val());
                    var b = Number($("#Nights").val());
                    var TotalGrossOnAccomodation = a * b;
                    $('#TotalGrossOnAccomodation').val(TotalGrossOnAccomodation);

                    var TotalNetOnAccomodation =0;
                    var e = Number($("#TotalGrossOnAccomodation").val());
                    var f = Number($("#TotalTaxValueAccomodation").val());
                    var TotalNetOnAccomodation = e - f;
                    $('#TotalNetOnAccomodation').val(TotalNetOnAccomodation);

                    var MaintenanceFee =0;
                    var f = Number($("#TotalTaxValueAccomodation").val());
                    var g = Number($("#MaintnceFeeRate").val());
                    var MaintenanceFee = f * g;
                    $('#MaintenanceFee').val(MaintenanceFee);

                    var TaxAvailable =0;
                    var f = Number($("#TotalTaxValueAccomodation").val());
                    var h = Number($("#MaintenanceFee").val());
                    var TaxAvailable = f - h;
                    $('#TaxAvailable').val(TaxAvailable);

                    var TotalTaxValueOnOtherExpence =0;
                    var i = Number($("#TotalGrossOnOtherExpence").val());
                    var j = Number($("#VATRate").val());
                    var TotalTaxValueOnOtherExpence = i * j;
                    $('#TotalTaxValueOnOtherExpence').val(TotalTaxValueOnOtherExpence);

                    var TotalNetOnOtherExpence =0;
                    var i = Number($("#TotalGrossOnOtherExpence").val());
                    var k = Number($("#TotalTaxValueOnOtherExpence").val());
                    var TotalNetOnOtherExpence = i - k;
                    $('#TotalNetOnOtherExpence').val(TotalNetOnOtherExpence);

      
                    var MaintenanceFeeOnVAT =0;
                    var k = Number($("#TotalTaxValueOnOtherExpence").val());
                    var x = Number($("#VATMaintnceFeeRate").val());
                    var MaintenanceFeeOnVAT = k * x;
                    $('#MaintenanceFeeOnVAT').val(MaintenanceFeeOnVAT);

                    var TotalNet =0;
                    var y = Number($("#TotalNetOnOtherExpence").val());
                    var z = Number($("#TotalNetOnAccomodation").val());
                    var TotalNet = y + z;
                    $('#TotalNet').val(TotalNet);

                    var TotalGross =0;
                    var i = Number($("#TotalGrossOnOtherExpence").val());
                    var e = Number($("#TotalGrossOnAccomodation").val());
                    var TotalGross = i + e;
                    $('#TotalGross').val(TotalGross);

                    var TotalTaxValue =0;
                    var k = Number($("#TotalTaxValueOnOtherExpence").val());
                    var f = Number($("#TotalTaxValueAccomodation").val());
                    var TotalTaxValue = k + f;
                    $('#TotalTaxValue').val(TotalTaxValue);


                    var TotalMaintenanceFee =0;
                    var p = Number($("#MaintenanceFeeOnVAT").val());
                    var h = Number($("#MaintenanceFee").val());
                    var TotalMaintenanceFee = p + h;
                    $('#TotalMaintenanceFee').val(TotalMaintenanceFee);

        
                    var TotalTaxAvailable =0;
                    var q = Number($("#TotalTaxValue").val());
                    var r = Number($("#TotalMaintenanceFee").val());
                    var TotalTaxAvailable = q - r;
                    $('#TotalTaxAvailable').val(TotalTaxAvailable);

                    var SumNet =0;
                    var m = Number($("#TotalNet").val());
                    var n = Number($("#TotalZeroRated").val());
                    var SumNet = m + n;
                    $('#SumNet').val(SumNet);

                  



                    
                });
                
            });
        </script>
     
    </head>
    <style>
	body {
  font-family: "Helvetica", Sans-Serif;
  background-color: #E5E4E2;
  background-image: url("bg.jpg");
  align-items: left;
  justify-content: center;
  
}
button{
    width:15%;
    padding: 5px 3px;
    margin: 1px 0;
    display: inline-block;
    border-radius: 1px;
    background-color: #DC143C;
    color: white;
    margin: 2px 0;
    border-radius: 2px;
    cursor: pointer;
    float: center;
    font-size: 17px; 
}

.button {border-radius: 18px;}




input[type=text], select {
  padding: 4px 6px; 
  margin: 4px;
  float: left;
  border: 3px double black;
  cursor: pointer;
}
input[type=text]:hover {
  border-color: red;
}
input[type=date]:hover {
  border-color: red;
}
input[type=number]:hover {
  border-color: red;
}
input[type=date], select {
  padding: 4px 6px; 
  margin: 4px;
  float: left;
  border: 3px double black;
  width: 17%;
  cursor: pointer;

}
input[type=gross], select {
  padding: 4px 6px; 
  margin: 4px;
  border: 2px solid red;
}
input[type=decimal], select {
  padding: 4px 6px; 
  margin: 4px;
  border: 2px solid red;
}
input[type=number], select {
  padding: 4px 6px; 
  margin: 4px;
  float: left;
  border: 3px double black;
  cursor: pointer;
  
}

input[type=text2], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  border: 1px double black;
  cursor: pointer;
  text-align: center;
  width: 10%;
  background-color: grey;
  color: white;
}

input[type=text2]:hover {
  background-color: red;
}
input[type=text3], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  border: 1px double black;
  cursor: pointer;
  text-align: center;
  width: 10%;
  background-color: red;
  color: white;
}


input[type=text3]:hover {
  background-color: green;
}

input[type=text4], select {
  padding: 2px 10px; 
  margin: 2px;
  float: center;
  border: 1px double black;
  cursor: pointer;
  text-align: center;
  width: 15%;
  background-color: red;
  color: white;
}

input[type=test], select {
    width: 0%;
    padding: 0px 0px;
    margin: 0px 0;
    display: inline-block;
    border: 0px solid blue;
    border-radius: 0px;
    box-sizing: border-box;
    font-size: 0px;
}
.container {
border: 0px solid #B22222;
margin-top: -4px;
margin-bottom: 0px;
width: 1000px;
height: 35px;
color: white;
background-color: black;
}

.container1 {
border: 0px solid #B22222;
margin-top: -6px;
margin-bottom: 4px;
width: 1000px;
height: 150px;
background-color: white;
}


.container2 {
border: 0px solid #B22222;
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 20px;
background-color: red;
}
ul.kradashboardnheader {
padding: 2px 0px;
list-style: none;
margin-bottom: 0px;
width: 1000px;
height: 60px;
background-color: red;
margin-top: 0px;
}

ul.kradashboardnheader li {
  display: inline;
  font-size: 10px;
}

ul.kradashboardnheader li+li:before {
  padding: 0px;
  color: black;
  content: "|\00a0";
  font-size: 19px;
}

ul.kradashboardnheader li a {
  color: white;
  text-decoration: none;
  font-size: 13px;
  padding: 6px 9px;
  

}

ul.kradashboardnheader li a:hover {
  color: black;
  text-decoration: ;
  text-align: left;
  background-color: #C21E56;
}



.container2b {
  position: absolute;
  width: 948px;
  border: 1px solid BLACK;
  padding: 10px;
  height: 40px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 0px;
  margin-right: 0px;
  margin-right: 0px;
  color:  red;
  padding: 6px 12px;
  display: block;
  text-align: center;
  font-size:  14px;

  
}

.container2c {
  position: absolute;
  width: 950px;
  border: 1px solid BLACK;
  padding: 8px;
  height: 55px;
  background-color: #B6B6B4;
  font-size: 14px;
  margin-top: 25px;
  margin-right: 0px;
  margin-right: 0px;
  text-align: center;
}
.container2d {
  position: absolute;
  width: 983px;
  border: 1px solid BLACK;
  padding: 10px;
  height: 15px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 4px;
  margin-right: 0px;
  margin-right: 0px;
  padding: 6px 6px;
  display: block;
  text-align: center;
  font-size:  19px;

}


.container2d4 {
  position: absolute;
  width: 955px;
  border: 0px;
  padding: 10px;
  height: 20px;
  background-color: #B6B6B4;
  font-size: 14px;
  margin-top: 10px;
  margin-right: 0px;
  margin-right: 0px;
  padding: 6px 6px;
  display: block;
  text-align: center;
  font-size:  19px;
  
}
.container2e {
  position: absolute;
  width: 950px;
  border: 1px solid BLACK;
  padding: 8px;
  height: 190px;
  background-color: #B6B6B4;
  font-size: 14px;
  margin-top: 110px;
  margin-right: 0px;
  margin-right: 0px;
}
fieldset{
  
  border: 2px solid BLACK;
  background-color: #eeeeee;
 
}

legend {
  background-color: gray;
  color: white;
  padding: 8px 16px;
}
.container2e1 {
  position: absolute;
  width: 950px;
  border: 1px solid red;
  padding: 8px;
  height: 190px;
  background-color: #B6B6B4;
  font-size: 14px;
  margin-top: -23px;
  margin-right: 0px;
  margin-right: 0px;
}

.container3 {
border: 1px solid black;
margin-top: -3px;
margin-bottom: 4px;
width: 998px;
height: 690px;
color:white;
background-color: white;
}

#background{
    position:absolute;
    min-height:80%; 
    min-width:80%;

}

#content{
  position:absolute;
  width:80%;
  padding: 18px;
  font-size: 16px;
  margin: 6px 4px;
  cursor: pointer;
  
}

#bg-image
{ 
    transform:rotate(0deg);
    -webkit-transform:rotate(0deg);
    margin-top: 200px;
    background-image: url("kra1.png");
    
}

.container4 {
border: 1px solid #838996;
margin-top: -3px;
margin-bottom: 4px;
width: 1000px;
height: 130px;
background-color: white;
}

label[type=text1], select {
  color: black;
  font-size: 16px;
  width: 100px;
  float: left;
  margin: 0px ;

}

label[type=text], select {
  color: black;
  font-size: 16px;
  width: 100px;
  float: left;
  margin: 0px ;
  
}
label[type=text]:after { content: " *"; color: #e32; }

input[type=submit]:hover {
    background-color: #45a049;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: red;
}

.ul1 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: left;
  padding: 8px 13px;
  text-decoration: none;
  font-size: 14px;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: red;
  min-width: 160px;
  box-shadow: 2px 10px 18px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.WING {
  padding: 1px 4px; 
  margin: 4px;
  float: left;
  border: 3px double black;
  cursor: pointer;
  width: 17%;
}

.WING option {
  color: black;
  padding: 6px 20px;
  display: block;
  text-align: center;
  font-size: 17px;
  background-color: white;
}

input[type=WING], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  cursor: pointer;
  text-align: center;
  width: 100%;
  background-color: grey;
  color: white;
}


.dropdown-content a {
  color: white;
  padding: 6px 12px;
  display: block;
  text-align: left;
  font-size: 14px;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {
  display: block;
}
table{  
        border-collapse: collapse;  
        width: 100%;   
    }  
th,td{  
    border: 2px solid black;   
    padding: 10px;  
}
</style>

<body>
<center>

	<!-- Navbar -->
	

    <div class="container1">
    <img class="card-img-top mx-auto" style="width:100%;" src="kraheader3.png" alt="Login Icon">
 
    </div>

    
    
    <ul class="kradashboardnheader">
   
   <li><a href="dashboard.php">Home  </a></li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Registration</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/eTreAmendment.htm?actionCode=loadRegitrationAmndMainPage">Amend PIN Details</a>
       <a href="#">Other Registration</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eRegIndi.htm?actionCode=loadReprintMainPage&operation=viewProfile">Consult Taxpayer Register</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eRegIndi.htm?actionCode=loadReprintMainPage">Reprint PIN certificate</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showCancelExciseLicense">Excise License Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/VATwithAgAmd.htm?actionCode=loadVatAmendmentNonIndi">Withholding VAT Amendment</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/VATwithAgAmd.htm?actionCode=loadVATCancellationForm">Withholding VAT Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/TenantWthAgentReg.htm?actionCode=loadTenantAmdForm">Rent Income withholding Agent<br>
       Amendment</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/reactivation.htm?actionCode=loadReactivationForm">e-Reactivation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/dormance.htm?actionCode=loadDormanceForm">e-Dormance</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/cancellation.htm?actionCode=loadCancellationForm">e-Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/TenantWthAgentReg.htm?actionCode=loadOptedOutLandLordRegForm">Opted Out Landlord <br> Regisration</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/TaxRepresentReg.htm?actionCode=loadTaxRepresentRegForm">Tax Representative Registration</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/TenantWthAgentReg.htm?actionCode=loadTenantWithAgentCancellationMainForm">Rent Income Withholdig Agent<br>
     Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/ePropertyReg.htm?actionCode=loadPropertyRegistrationMainForm">Registered Property Details</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/TenantWthAgentReg.htm?actionCode=loadOptedOutTotRegDtls">Opted Out Tot Registration</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/TaxRepresentReg.htm?actionCode=showTaxRepCancellation">Tax Representative Cancellation</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Returns</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm?actionCode=loadPage&amendmentFlag=N">File Return</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm?actionCode=loadPage&amendmentFlag=Y">File Amended Return</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm">View Filed Return</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm?actionCode=loadPage&nilReturnFlag=Y&amendmentFlag=N">File Nil Return</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm?actionCode=loadPageITR">ITR For Employment Income<br>
     Only</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/VTDPReturns.htm?actionCode=loadVTDPPage">Voluntary Tax Disclosure<br>
     Programme</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm?actionCode=getPayeCSV">Download PAYE CSV</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Debt And Enforcement</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/dne.htm?actionCode=loadAmnestyInitiationPage">Amnesty Application</a>
 >
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Payments</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/paymentRegistration.htm?actionCode=beforeLoadPRForm">Payment Registration</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/paymentRegistration.htm?actionCode=loadMakePaymentForm">Make Payment</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/paymentPlanProsess.htm?actionCode=prePaymentPlanForm">Apply PaymentPlan</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/trackYrStatusController.htm?actionCode=loadPage&caseType=PAY">Consult Payments</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/paymentRegistration.htm?actionCode=consultCGTReturn">Consult CGT Return</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/paymentRegistration.htm?actionCode=loadSetoffAdvancePaymentForm">SettOff AdvancePayment<br>OffSet OverPayment</a>
       <a href="#">Pay Salaries</a>
       <a href="#">Pay Contractors</a>
       <a href="#">Pay Suppliers</a>
       <a href="#">Pay Services</a>
       <a href="#">Pay Bills</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Assesment Disputes</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/tss.htm?actionCode=loadReqObjApp">Objection Application</a>
       <a href="javascript:void(0)"class="dropbtn1">Notice Of intention to Appeal</a>
       <div class="btn-group dropright">
       <a href="#">Link 1</a>
       <a href="#">Link 2</a>
       <a href="#">Link 3</a>
     </div>
       <a href="https://itax.kra.go.ke/KRA-Portal/tss.htm?actionCode=loadReqObjAppWhtVat">Objection Application WHT VAT</a>
       <a href="#">NOtice Of Internation to Appeal<br> WHT VAT</a>
       <div class="btn-group dropright">
       <a href="#">Link 1</a>
       <a href="#">Link 2</a>
       <a href="#">Link 3</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Refund</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/eVATRefund.htm?actionCode=showVATRefund">VAT</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eITRefund.htm?actionCode=showITRefund">Income Tax</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eExciseRefund.htm?actionCode=showExciseRefund">Exice</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eStampDutyRefund.htm?actionCode=showStampDutyAcknRefund">Stamp Duty</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eLandRentRefund.htm?actionCode=showLandRentAcknRefund">Land Rent</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eInventoryRefund.htm?actionCode=showInventoryRefund">Inventory</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eRefundCSV.htm?actionCode=showRefundOfTaxPaidInError">Refund On TaxPaid In Error</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eRefundCSV.htm?actionCode=showRefundOfTaxPaidInError">Refund of Overpaid Taxes</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eTOTRefund.htm?actionCode=showTOTRefund">Turnover Tax</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Certificates</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showReprintWhtCerti">Reprint Withholding certificate</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showCancOfVATWHTCerti">Withholding VAT Certificate<br>
        Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showCancOfMRIWHTCerti">Rental Income Withholding<br>
       Certificate Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showCancOfWHTCerti">withholding Certificate<br>
     Cancellation</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showGenerateTCC">Apply for Tax Compliance<br>
     Certificate(TCC)</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showReprintTcc">Consult and Reprint TCC</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showReprintVATWhtCerti">Reprint VAT Withholding<br>
     Certicate</a>
     <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showReprintRentIncomeWhtCerti">Reprint Rental Income <br> 
     Withholding Certicate</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/VTDPReturns.htm?actionCode=showVTDPCertificatePage">Apply for VTDP Certificate</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Useful Links</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=showFAQ&operation=viewCategory&viewType=static">FAQ</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/trackYrStatusController.htm?actionCode=loadPage">Track Status of Application</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/login.htm?actionCode=loadTaxTypePassword">Generate Tax Type Specific<br>PassWord</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/pinChecker.htm?actionCode=loadPage">PIN Checcker</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/siteSurvey.htm?actionCode=fetchQuestions">Site Survey</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=validateTCC">TCC/Exemption Checker</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/complianceMonitoring.htm?actionCode=showVerifyWithholdingCertificate">WHT Checker</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=openFeedback">Feedback</a>
       <a href="https://kenya-revenue-authority.custhelp.com/app/ask/session/L3RpbWUvMTY3NjQ1NTY3Ny9nZW4vMTY3NjQ1NTY3Ny9zaWQvZlVpTUZHbHIwbEFTUVNhWU80QzRMek9IRk9ZZyU3RW85eTglN0V0bUdlZTZrQUhwVWhYUjdRdGFsaEdBcHZ4UjJLeGh2aVNvNTNaTzlhJTdFZmJ0aVo0JTdFa2xvUlo0bmI3eUdzVUdualJqMUJybnA2bTBZVnhGOHd2VXBwcWclMjElMjE=">Report Problem</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/reprintPage.htm?actionCode=loadReprintPage">Consult and Reprint
         <br>Acknowledgement Receipt and <br>
         Certificates
       </a>
     </div>
   </li>
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">e-Cheques</a>
     <div class="dropdown-content">
       <a href="#">Receice Rental Cheques</a>
       <a href="#">Receice Contracter Cheques</a>
       <a href="#">Receice Supplier Cheques</a>
       <a href="#">Receice Salary Cheques</a>
       <a href="#">Receice Service Cheques</a>
     </div>
   </li>
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">e-Communication</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/eCommunication.htm?messageType=viewReceived&archFlag=no">Received Messages</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/eCommunication.htm?messageType=viewSent&archFlag=no">View Sent Messages</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">My ledger</a>
     <div class="dropdown-content">
       <a href="https://itax.kra.go.ke/KRA-Portal/account.htm?actionCode=showGeneralLedgerFormWithPara&isNewLedger=Y">General Ledger</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/account.htm?actionCode=showGeneralLedgerForm">General Ledger Report</a>
       <a href="https://itax.kra.go.ke/KRA-Portal/account.htm?actionCode=showGeneralLedgerFormTR">General Ledger Report for TAX<br>
     Rep</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Rental Settings</a>
     <div class="dropdown-content">
       <a href="ComercialRentalCalculater.php">COMMERCIAL RENTALS </a>
       <a href="ResidencialRentalCalculater.php">RESIDENTIAL RENTAL INCOME</a>
       <a href="OpenSpaceRentalCalculater.php">OPENSPACE RENTAL INCOME </a>
       <a href="SHOPRentalCalculater.php">SHOPS RENTAL INCOME</a>
       <a href="STALLRentalCalculater.php">STALLS RENTAL INCOME</a>
       <a href="AirB&BAccomodationCalculater.php">AirB&B ACCOMODATION</a>
     </div>
   </li>
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Hotels & Eateries</a>
     <div class="dropdown-content">
       <a href="HotelAccomodationCalculater.php">HOTELS & ACCOMODATION </a>
       <a href="#">RANCHES & ACCOMODATION  </a>
       <a href="#">EATERIES & RESTORANTS  </a>
       <a href="#">BARS & ClUBS/LAUNCHES </a>
       <a href="#">WINE/PPIRITS & LIQUEUR STORE</a>
     </div>
   </li>
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Supplier</a>
     <div class="dropdown-content">
       <a href="#">Contractor</a>
       <a href="#">General Supply</a>
       <a href="#">Services</a>
     </div>
   </li>
 
   
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Retail Business</a>
     <div class="dropdown-content">
       <a href="#">Macro Business </a>
       <a href="#">Micro Business </a>
     </div>
   </li>
   
  
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Importer/Exporter</a>
     <div class="dropdown-content">
       <a href="#">Importer</a>
       <a href="#">Exporter</a>
     </div>
   </li>
 
   <li class="dropdown">
     <a href="javascript:void(0)" class="dropbtn">Employer</a>
     <div class="dropdown-content">
       <a href="#">Importer</a>
       <a href="#">Exporter</a>
     </div>
   </li>
   <li><a href="logout.php">Logout</a></li>
 </ul>
 </ul>
    </div>
    <div class="container">
    <img class="card-img-top mx-auto" style="width:3%;" src="profile.png" alt="Login Icon">
    <?php
			
				echo "-Last Login:" . date("M.d");
                echo "," . date("Y");
                echo "  " . date("H:i:s");
               
			?>
</div>

<div class="container3">
<div class="container2d">
<div class="container2d1">
<a href="eHotelAccomodationChangesIndex.php" ><input type="text3" value="View DoorS" readonly="readonly"></a>
<a href="eHotelAccomodationDoorUniqueNoIndex.php" ><input type="text3" value="Add DoorUniqueNO" readonly="readonly"></a>
<a href="eHotelAccomodationChangesTenantIndex.php" ><input type="text3" value="View Tenants" readonly="readonly"></a>
</div>


</div>
<br><br>
<div class="container2a">



<form method="POST">

<?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `itaxrentalincomeadmin`");
					while($row=mysqli_fetch_array($query)){
						?>
    <input type="test" name="KRABankSwiftCode" value="<?php echo $row['BankSwiftCode']; ?>" id="KRABankSwiftCode" placeholder="KRABankSwiftCode" readonly="readonly">
    <input type="test" name="KRABankName" value="<?php echo $row['BankName']; ?>" id="KRABankName" placeholder="KRABankName" readonly="readonly">
    <input type="test" name="KRAMPESABusinessNo" value="<?php echo $row['PayBillNo']; ?>" id="KRAMPESABusinessNo" placeholder="KRAMPESABusinessNo" readonly="readonly">
    <input type="test" name="KRABankAccNO" value="<?php echo $row['AccountNO']; ?>" id="KRABankAccNO" placeholder="KRABankAccNO" readonly="readonly" >
    <input type="test" name="TAXRate"  id="TAXRate"placeholder="TAXRate" value="<?php echo $row['TAXRate']; ?>" readonly="readonly">
<?php
					}
				?>

<?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxRentalIncomeSuperAdmin`");
					while($row=mysqli_fetch_array($query)){
						?>
      <input type="test" name="MaintenanceBankSwiftCode" value="<?php echo $row['BankSwiftCode']; ?>" id="MaintenanceBankSwiftCode" placeholder="MaintenanceBankSwiftCode" required>
      <input type="test" name="MaintenanceBankName" value="<?php echo $row['BankName']; ?>" id="MaintenanceBankName" placeholder="MaintenanceBankName" readonly="readonly">
    <input type="test" name="MaintenanceMPESABusinessNo" value="<?php echo $row['PayBillNo']; ?>" id="MaintenanceMPESABusinessNo" placeholder="MaintenanceMPESABusinessNo" readonly="readonly">
    <input type="test" name="MaintenanceBankAccNo" value="<?php echo $row['AccountNO']; ?>" id="MaintenanceBankAccNo" placeholder="MaintenanceBankAccNo" readonly="readonly" >
    <input type="test" name="MaintnceFeeRate" id="MaintnceFeeRate" value="<?php echo $row['MaintnceFeeRate']; ?>"placeholder="MaintenceFeeRate" readonly="readonly">
    
    
<?php
					}
				?>

<?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxVATAdmin`");
					while($row=mysqli_fetch_array($query)){
						?>
     <input type="test" name="VATRate" id="VATRate" value="<?php echo $row['TAXRate']; ?>"placeholder="VATRate" readonly="readonly">        
     
<?php
					}
				?>

<?php
            if(isset($_SESSION['status']))
            {
                echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
            ?>
             

          
    <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
            <input type="test" name="KRAPIN" value="<?php echo $row['KRAPIN']; ?>" id="" placeholder="Enter KRAPIN"  readonly="readonly">
   
    
<?php
					}
				?>
      <fieldset>
          <legend>Hotel Configuration Area: </legend>

             <label type="text">Buss RegName</label>
                <input type="text" name="BussRegName" value="" id="" placeholder="Enter BussRegName"   >
               <label type="text">PlotNo</label>
                <input type="text" name="PlotNo" value="" id="" placeholder="Enter PlotNo"   >
            
                <label type="text">BranchNO</label>
               <input type="number" name="BranchNO" value="" id="" placeholder="Enter BranchNO"  ><br><br><br>
               <label type="text">SuiteNo</label>
               <input type="number" name="SuiteNo" value="" id="" placeholder="Enter DoorNo"  >
             
               <label type="text">WING</label>
               <div class="WING" required>
                <select name="WING" class="" >
                    <option value="">WING Name</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>
                    <option value="K">K</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                  
                </select>
          </div>
               
          <label type="text">BranchName</label>
               <input type="text" name="BranchName" value="" id="BranchName"  placeholder="Enter BranchName"  >

              
</fieldset>

<fieldset>
          <legend>Banker Details: </legend>

          <label type="text">Bank SwiftCode</label>
               <div class="WING" required>
                <select name="HotelBankSwiftCode" class="" required>
                    <option value="">Bank SwiftCode</option>
                    <option value="KCBLKENX">KCBLKENX</option>
                    <option value="EQBLKENA">EQBLKENA</option>
                    <option value="CBAFKENX">CBAFKENX</option>
                    <option value="CBAFKENX">CIFIKENA</option>
                </select>
          </div>

          <label type="text">BankName</label>
               <div class="WING" required>
                <select name="HotelBankName" class="" required>
                    <option value="">BankName</option>
                    <option value="KCB BANK KENYA LIMITED">KCB BANK  KENYA</option>
                    <option value="EQUITY BANK (KENYA) LIMITED">EQUITY BANK KENYA </option>
                    <option value="NCBA BANK KENYA PLC">NCBA BANK KENYA </option>
                    <option value="KINGDOM BANK LTD KENYA">KINGDOM BANK LTD KENYA </option>
                </select>
          </div>

          <label type="text">BusinessNo</label>
               <div class="WING" required>
                <select name="HotelMPESABusinessNo" class="" required>
                    <option value="">BusinessNo</option>
                    <option value="522522">522522</option>
                    <option value="247247">247247</option>
                    <option value="880100">880100 </option>
                    <option value="529901">529901 </option>
                </select>
                
          </div><br><br><br>
             
               
               <label type="text">AccountNO</label>
               <input type="text" name="HotelBankAccNo" value="" id="HotelBankAccNo" oninput="valid(this)"type="text"placeholder="Enter ACCOUNTNO" required >

</fieldset>

<fieldset>
          <legend>Gross Ammount</legend>
          <label type="text">Amount @NightKSH:</label>
               <input type="text" name="DailyGross" value="" id="DailyGross"oninput="valid(this)"type="text" placeholder="0.00"   minlength="1" maxlength="7" required>
              
              <label type="text">NoOf Nights</label>
              <input type="text" name="Nights" value="" id="Nights" placeholder="Enter Nights" required >
             
              <label type="text">Taxable Expences</label>
              <input type="text" name="TotalGrossOnOtherExpence" value="" id="TotalGrossOnOtherExpence" oninput="valid(this)"type="text" placeholder="0.00"   minlength="1" maxlength="7" required><br><br><br>

              <label type="text">Total ZeroRated</label>
              <input type="text" name="TotalZeroRated" value="" id="TotalZeroRated" oninput="valid(this)"type="text" placeholder="0.00"   minlength="1" maxlength="7" required>

</fieldset>

<fieldset>
          <legend>Tax Calculator: </legend>

          <label type="text">Total Gross</label>
          <input type="text" name="TotalGross" id="TotalGross" value=""placeholder="0.00" readonly="readonly" required>

          <label type="text">SumNet</label>
               <input type="text" name="SumNet" id="SumNet" value=""placeholder="0.00" readonly="readonly" required>

               <label type="text">Tax</label>
               <input type="text" name="TotalTaxValue" id="TotalTaxValue" value=""placeholder="0.00" readonly="readonly" required><br><br><br>

               <label type="text">Tax Available</label>
               <input type="text" name="TotalTaxAvailable" id="TotalTaxAvailable" value=""placeholder="0.00" readonly="readonly"required>
               <label type="text">Service Fee</label>
               <input type="text" name="TotalMaintenanceFee" id="TotalMaintenanceFee" value=""placeholder="0.00" readonly="readonly" required> 
               <input type="test" name="TotalNet" id="TotalNet" value=""placeholder="0.00" readonly="readonly" required>

               
               
              
               
</fieldset>

<button class="btn btn-primary" name="generate">Submit</button>
               <input type="test" name="SuiteUniqueNo"  class="form-control" name="barcode" value="" id="text" placeholder="Enter DoorUniqueNo" minlength="13" maxlength="13"   >
               <input type="test" name="Door"  class="form-control" name="Door" value="" id="text" placeholder="Enter Door"    >

               <input type="test" name="TaxValue" value="" id="TaxValue"oninput="valid(this)"type="test" placeholder="0.00"  required minlength="1" maxlength="7" readonly="readonly">
              <input type="test" name="TotalTaxValueAccomodation" value="" id="TotalTaxValueAccomodation"placeholder=" TotalTaxValueAccomodation" readonly="readonly">
              <input type="test" name="TotalNetOnAccomodation" value="" id="TotalNetOnAccomodation" placeholder="TotalNetOnAccomodation" readonly="readonly">
              <input type="test" name="TaxAvailable" value="" id="TaxAvailable" placeholder="TaxAvailable" readonly="readonly" >
               <input type="test" name="TotalGrossOnAccomodation" value="" id="TotalGrossOnAccomodation" placeholder=" TotalGrossOnAccomodation" readonly="readonly">
               <input type="test" name="MaintenanceFee" value="" id="MaintenanceFee" placeholder="MaintenanceFee" readonly="readonly">
              
              
               <input type="test" name="TotalTaxValueOnOtherExpence" id="TotalTaxValueOnOtherExpence" value=""placeholder="0.00" readonly="readonly">
               <input type="test" name="TotalNetOnOtherExpence" id="TotalNetOnOtherExpence" value=""placeholder="0.00" readonly="readonly">
               <input type="test" name="VATMaintnceFeeRate" id="VATMaintnceFeeRate" value="0.2"placeholder="0.00" readonly="readonly">
               <input type="test" name="MaintenanceFeeOnVAT" id="MaintenanceFeeOnVAT" value=""placeholder="0.00" readonly="readonly">

              
               
          </dive>
          <div>
            <br>
          
          <p id="GFG_UP" 
       style="font-size: 15px; 
              font-weight: bold; color: green; ">
    </p>
          
         
               
    <p id="GFG_DOWN" 
       style="font-size: 18px;
              font-weight: bold; 
              color: red; ">
    </p>
    <script>
        var el_up = document.getElementById("GFG_UP");
        var el_down = document.getElementById("GFG_DOWN");
        el_up.innerHTML = 
          "";
        var RegExp = new RegExp(/^\d*\.?\d*$/);
        var val = document.getElementById("DailyGross").value;
 
        function valid(elem) {
            if (RegExp.test(elem.value)) {
                val = elem.value;
                el_down.innerHTML = "";
            } else {
                elem.value = val;
                el_down.innerHTML = "";
            }
        }
    </script>
          
      
               <input type="test" name="TENANTKRAPIN" value="" id="" placeholder="Enter TENANTKRAPIN"  >
                <input type="test" name="IDNO" value="" id="IDNO" oninput="valid(this)" placeholder="Enter IDNO" minlength="8" maxlength="8"  >
               <input type="test" name="PassPortNO" value="" id="" placeholder="Enter PassPortNO"  ><br><br><br>
             
               <input type="test" name="Nationality" value="" id="" placeholder="Enter Nationality"  >
             
               <input type="test" name="LastName" value="" id="LastName"  placeholder="Enter LastName" >
              
               <input type="test" name="FirstName" value="" id="FirstName"  placeholder="Enter FirstName" ><br><br><br>
              
               <input type="test" name="ContactNO" value="" id="ContactNO" oninput="valid(this)" placeholder="Tenant ContactNO" minlength="10" maxlength="10" >
               
               <input type="test" name="JoinedDate" value="" id="JoinedDate"  placeholder="Enter JoinedDate" >
              
               <input type="test" name="ExitDate" value="" id="ExitDate"  placeholder="Enter ExitDate" >
              
    
</div>
</div>

</div>
</div>
    </div>
    <div class="container4">
    <img class="card-img-top mx-auto" style="width:100%;" src="krafooter.png" alt="Login Icon">
    </div>
 

    </form>

	</div>
	</center>
</body>
</html>