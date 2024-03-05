<?php
session_start();
include("db1.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $KRAPIN = $_POST['KRAPIN']; 
  $Tax = $_POST['Tax'];
  $Obligation = $_POST['Obligation'];
    
  
 

    if(!empty($Tax)  && !empty($KRAPIN) )
    {
        $query = "insert into TaxPaidiTaxGateWay (KRAPIN,Tax,Obligation)
        Values ('$KRAPIN','$Tax','$Obligation')";

        mysqli_query($con,$query);
        {
            header("location: MobileAppTaxPayentOptions.php");
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
                $("#GrossRent,#TAXRate").keyup(function(){

                    var TaxValue =0;
                    var x = Number($("#GrossRent").val());
                    var y = Number($("#TAXRate").val());
                    var TaxValue = x * y;
                    $('#TaxValue').val(TaxValue);
                

                    var MaintenanceFee =0;
                    var a = Number($("#TaxValue").val());
                    var b = Number($("#MaintnceFeeRate").val());
                    var MaintenanceFee = a * b;
                    $('#MaintenanceFee').val(MaintenanceFee);


                    var NetRent =0;
                    var x = Number($("#GrossRent").val());
                    var a = Number($("#TaxValue").val());
                    var NetRent = x - a;
                    $('#NetRent').val(NetRent)


                    var TaxAvailable =0;
                    var a = Number($("#TaxValue").val());
                    var c = Number($("#MaintenanceFee").val());
                    var TaxAvailable = a - c;
                    $('#TaxAvailable').val(TaxAvailable)

                    var DailyGrossRent =0;
                    var x = Number($("#GrossRent").val());
                    var z = 30.41666666666667
                    var DailyGrossRent = x / z;
                    $('#DailyGrossRent').val(DailyGrossRent)
                 
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

.BlockName {
  padding: 1px 4px; 
  margin: 4px;
  float: left;
  border: 3px double black;
  cursor: pointer;
  width: 17%;
}

.BlockName option {
  color: black;
  padding: 6px 20px;
  display: block;
  text-align: center;
  font-size: 17px;
  background-color: white;
}

input[type=BlockName], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  cursor: pointer;
  text-align: center;
  width: 100%;
  background-color: grey;
  color: white;
}


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
height: 500px;
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
  <a href="javascript:void(0)" class="dropbtn">Make Payments</a>
     <div class="dropdown-content">
       <a href="MobileAppTaxPaydashboard.php">Pay Tax</a>
       <a href="MobileAppTaxPaydashboard.php">Pay Fines</a>
       <a href="#">Schedule Payments</a>
    </div>
  </li>

  

  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">APIs For POSs</a>
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

</div>


</div>
<br><br>
<div class="container2a">



<form method="POST">


             
    <fieldset>
          <legend>Comercial Rental Configuration : </legend>
          <label type="text">KRAPIN</label>
          <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
            <input type="text" name="KRAPIN" value="<?php echo $row['KRAPIN']; ?>" id="" placeholder="Enter KRAPIN"  readonly="readonly">
   
    
<?php
					}
				?>
        
            

        

          <label type="text">Tax</label>
               <div class="WING" required>
                <select name="Tax" class="" required>
                <option value="">Select  Tax </option>
                <option value="Capital Gains Tax (CGT)">Capital Gains Tax (CGT)</option>
                <option value="Pay As You Earn (PAYE)">Pay As You Earn (PAYE)</option>
                <option value="Withholding Tax (WHT)">Withholding Tax (WHT)</option>
                <option value="Value Added Tax (VAT)">Value Added Tax (VAT)</option>
                <option value="Agency Revenue">Agency Revenue</option>
                <option value="Turnover Tax">Turnover Tax</option>
                <option value="Excise Duty">Excise Duty</option>
                <option value="Income Tax">Income Tax</option>
                
                </select>   
          </div>
          <label type="text">Obligation</label>
               <div class="WING" required>
                <select name="Obligation" class="" required>
                <option value="">Select Obligation</option>
                <option value="Natural resource Income">Natural resource Income</option>
                <option value="Dividend & Interests">Dividend and Interests</option>
                <option value="Digital Marketplace">Digital Marketplace</option>
                <option value="Employment Income">Employment Income</option>
                <option value="Business Income">Business Income</option>
                <option value="Pension Income">Pension Income</option>
                <option value="Income Tax">Rental Income </option>
                </select>
          </div>
          <br><br><br>
          
</fieldset>
<button class="btn btn-primary" name="generate">Submit</button>
              
               
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
        var val = document.getElementById("GrossRent").value;
 
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
              
    
               <input type="test" name="NetRent" value="" id="NetRent" placeholder="NetRent" readonly="readonly">
               
               <input type="test" name="TaxValue" value="" id="TaxValue"placeholder=" TaxValue" readonly="readonly">
              
               <input type="test" name="TaxAvailable" value="" id="TaxAvailable" placeholder="TaxAvailable" readonly="readonly" >
               
               
               <input type="test" name="MaintenanceFee" value="" id="MaintenanceFee" placeholder="MaintenanceFee" readonly="readonly">
               
            
           
            

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