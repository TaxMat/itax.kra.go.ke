
<!DOCTYPE html>
<html>
<head>
<title>Kenya Revenue Authority</title>
<link rel="icon" type="image/x-icon" href="kra.png">
<style>
    button {
  
  width: 255px;
  border: none;
  color: white;
  padding: 10px;
  font-size: 16px;
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  border-radius: 19px;
  
}
    body{
       
 font-family: "Helvetica", Sans-Serif;
  background-color: #E5E4E2;
  background-image: url("bg.jpg");
  align-items: left;
  justify-content: center;
    }

    .tbl-container1b{
        max-width: fit-content;
        max-height: fit-content;
       
    }

    
    .tbl-fixed1{
        height: fit-content;
        max-height: 60vh;
        max-width: 170vh;
        margin-top: 0px;
    }

 

    table th {
        position: sticky;
        top: 0px;
        background: red;
        text-align: center;
        color: #fff;
        border: 1px solid #CCC;
        font-size: 16px;

    }

    .tbl-container{
        max-width: fit-content;
        max-height: fit-content;
    }

    .tbl-fixed{
        overflow-x: scroll;
        overflow-y: scroll;
        height: fit-content;
        max-height: 40vh;
        max-width: 400vh;
        margin-top: 10px;
    }

    table{
        min-width: max-content;
        border-collapse: separate;
    }

   

    
    table td{
        background: #fff;
        text-align: center;
        border: 1px solid eccc;
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

.container {
border: 0px solid #B22222;
margin-top: -4px;
margin-bottom: 0px;
width: 997px;
height: 35px;
color: black;
background-color: white;
}
.container1 {
border: 0px solid #B22222;
margin-top: -8px;
margin-bottom: 4px;
width: 1000px;
height: 150px;
background-color: white;
}

.container1a {
border: 0px solid #B22222;
margin-top: -15px;
margin-bottom: 0px;
width: 999px;
height: 30px;
background-color: black;
}

.container1b {
border: 0px solid green;
margin-top: 5px;
margin-bottom: 0px;
width: 965px;
height: 25px;
text-align: center;


}

.container2 {
border: 0px solid #B22222;
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 20px;
background-color: red;
}

.container4 {
border: 2px solid #838996;
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 130px;
color: black;
background-color: white;
}
.container4a {
border: 2px solid black;
margin-top: 0px;
margin-bottom: 4px;
width: 997px;
height: 450px;
color: black;
background-color:#E5E4E2;
}

.container4b {
border: 2px solid black;
margin-top: 0px;
margin-bottom: 280px;
width: 997px;
height: 200px;
background-color: white;
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
li a, .dropbtn1 {
  display: left;
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
input[type=changes], select {
    width: 49%;
    padding: 6px 14px;
    margin: 3px 0;
    display: inline-block;
    border: 2px solid grey;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
}
input[type=tel], select {
    width: 49%;
    padding: 6px 14px;
    margin: 3px 0;
    display: inline-block;
    border: 2px solid red;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
    
}
input[type=returns], select {
    width: 49%;
    padding: 6px 14px;
    margin: 3px 0;
    display: inline-block;
    border: 2px solid #45a049;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
    
}
input[type=returns]:hover {
    background-color: #45a049;
}
input[type=changes]:hover {
    background-color: grey;
}
input[type=tel]:hover {
    background-color: red;
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

table{  
        border-collapse: collapse;  
        width: 50%;   
    }  
th,td{  
    border: 2px solid green;   
    padding: 4px;  
}
tr,th{  
    border: 2px solid green;   
    padding: 4px;  
}
th,tr{  
    border: 2px solid green;   
    padding: 4px;  
}
</style>
</head>

<body>
    <center>
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

<div class="container4a">
<div class="container">

<img class="card-img-top mx-auto" style="width:3%;" src="profile.png" alt="Login Icon">
     <?php
       
         echo "-Last Login:" . date("M.d");
                 echo "," . date("Y");
                 echo "  " . date("H:i:s");
                
       ?>

<div class="container1b">
<a href="SHOPRentalCalculater.php" style="color:red"><input type="text2"  value="<<< Back" readonly="readonly" ></a>
</div>   
<div class="container tbl-container">
        <div class="row tbl-fixed">
        <table class="table-striped table-condensed">
           
              <thead>
                 <tr>
                 
      <th>Door</th>
      <th>Door UniqueNo</th>
      <th>IDNO</th>
      <th>PassPortNO</th>
      <th>Nationality</th>
      <th>LastName</th>
      <th>ContactNO</th>
      <th>ExitDate</th>
	    <th>ADD/UPDATE</th>
      <th>Print INVOICE</th>
            </tr>
        </thead>
   
        <tbody>
        <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `SHOPRentalCalculater`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
              
              <td><?php echo $row['Door']; ?></td>
              <td><?php echo $row['SuiteUniqueNo']; ?></td>
							<td><?php echo $row['IDNO']; ?></td>
							<td><?php echo $row['PassPortNO']; ?></td>
							<td><?php echo $row['Nationality']; ?></td>
							<td><?php echo $row['LastName']; ?></td>
							<td><?php echo $row['ContactNO']; ?></td>
							<td><?php echo $row['ExitDate']; ?></td>
             
							<td>
								<a href="eSHOPRentalChangesTenantedit.php?ID=<?php echo $row['ID']; ?>" style="color:red">ADD/UPDATE</a>
              </td>
                <td>
								<a href="eSHOPRentalChangesTenantedit1.php?ID=<?php echo $row['ID']; ?>" style="color:red">INVOICE</a>
							</td>
						</tr>
						<?php 
					}
				?>
        </tbody>
              
                </div> 
                   
                </div>    
                   
</body>

</html>
