<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['user_id'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Kenya Revenue Authority</title>
        <link rel="icon" type="image/x-icon" href="kra.png">
        <link rel="stylesheet" href="style.css">
     
    </head>

	<style>
	body {
  font-family: "Helvetica", Sans-Serif;
  background-color: #E5E4E2;
  background-image: url("bg.jpg");
  align-items: left;
  justify-content: center;
  
}

.container {
border: 0px solid #B22222;
margin-top: 0px;
margin-bottom: 4px;
width: 1000px;
height: 40px;
background-color: black;
color: white;

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
margin-top: -3px;
margin-bottom: 4px;
width: 1000px;
height: 20px;
background-color: red;
}

.container2c {
  position: absolute;
  width: 950px;
  border: 0px ;
  padding: 8px;
  height: 480px;
  background-color: white;
  font-size: 14px;
  margin-top: -3px;
  margin-right: 0px;
  margin-right: 0px;
}
.container2c1 {
  position: absolute;
  width: 280px;
  border: 2px ;
  padding: 8px;
  height: 480px;
  background-color: white;
  font-size: 14px;
  margin-top: -29px;
  text-decoration: none;
}
.container2c2 {
  position: absolute;
  width: 280px;
  border: 2px ;
  padding: 8px;
  height: 480px;
  background-color: white;
  font-size: 14px;
  margin-top: -29px;
  right: 340px;
  text-decoration: none;
}

.container2c3 {
  position: absolute;
  width: 280px;
  border: 2px ;
  padding: 8px;
  height: 480px;
  background-color: white;
  font-size: 14px;
  margin-top: -29px;
  right: 40px;
  text-decoration: none;
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
.container3 {
border: 1px solid black;
margin-top: -4px;
margin-bottom: 0px;
width: 997px;
height: 530px;
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
border: 2px solid #838996;
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 130px;
background-color: white;
}
input[type=NationalID], select {
    width: 50%;
    padding: 6px 12px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid red;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
	text-align: center;
    font-size: 16px;
}

input[type=options], select {
    width: 89%;
    padding: 6px 12px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid red;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
	text-align: center;
    font-size: 16px;
}
input[type=password], select {
    width: 50%;
    padding: 6px 12px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid red;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
	text-align: center;
    font-size: 16px;
}
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

.e-Registration {background-color: black;
  width: 295px;}
.MyProfile {background-color: black;
  width: 295px;}
.e-Return {background-color: black;
  width: 295px;}
.e-Payments {background-color: black;
  width: 275px;}
.e-RealEstate  {background-color: red;
  width: 275px;}
.e-RetailBusiness {background-color: red;
  width: 275px;}
.e-Cheques {background-color: red;
  width: 295px;}
.e-Employer  {background-color: red;
  width: 295px;}
.e-Suppliers_Contractor {background-color: red;
  width: 295px;}
.e-Import_Export  {background-color: red;
  width: 295px;}


fieldset.e-Registration {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
        
      }

      fieldset.MyProfile {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }
      fieldset.e-Return {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }
      fieldset.e-Payments {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }

      fieldset.e-RealEstate  {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
        
        
      }

      fieldset.e-RetailBusiness {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }

      fieldset.e-Cheques {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }

      fieldset.e-Employer {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }

      fieldset.e-Suppliers_Contractor {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }

      fieldset.e-Import_Export {
        background: white;
        width: 6%;
        border: none;
        margin-top: 0px;
        margin-right: 0px;
      }


  #e-Registration {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
  
}

#MyProfile {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-Return {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-Payments {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 260px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-RealEstate {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 260px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
  align-items: center;
}

#e-RetailBusiness {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 260px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-Cheques {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-Employer {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-Suppliers_Contractor {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}

#e-Import_Export {
  margin-top: 0px;
  margin-right: 0px;
  margin: auto;
  width: 280px;
  max-width: 60vw;
  height: 5rem;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  padding: 8px;
  background: #f9fcff;
}
label {
  color: black;
  font-weight: bold;
  width: 160px;
  float: left;
  margin: 1px 1;

}
label:after { content: ": " }

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
    <a href="javascript:void(0)" class="dropbtn">Sell Property</a>
    <div class="dropdown-content">
      <a href="#">Sell Land </a>
      <a href="#">Sell Car </a>
      <a href="#">Sell House </a>
      <a href="#">Other Properies</a>
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
    <a href="javascript:void(0)" class="dropbtn">POS</a>
    <div class="dropdown-content">
      <a href="#">Macro Business POS</a>
      <a href="#">Micro Business POS</a>
      <a href="#">Liquor POS</a>
      <a href="#">Eatery POS</a>
      <a href="#">Hotels POS</a>
      <a href="#">Chemist POS</a>
      <a href="#">Hardwares POS</a>
      <a href="#">Gass Pump POS</a>
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
				require'conn.php';
			
				
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				
				echo  "<h class='text-success'>".$fetch['username']."</h>";
		

				echo "-Last Login:" . date("M.d");
                echo "," . date("Y");
                echo "  " . date("H:i:s");
               
			?>
			</div>
	
<div class="container3">
<div id="background">

	</div>

<div id="content">
 
<div class="container2c">
<div class="container2c1">

<fieldset class="e-Registration">
     <button onclick="myFunction()" type="button" class="e-Registration" > e-Registration</button>
        <div id="e-Registration">
        <a href="https://itax.kra.go.ke/KRA-Portal/eTreAmendment.htm?actionCode=loadRegitrationAmndMainPage"><img class="card-img-top mx-auto" style="width:13%;" src="Amendment.png" alt="Login Icon">Amendment</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/cancellation.htm?actionCode=loadCancellationForm"><img class="card-img-top mx-auto" style="width:13%;" src="cancellation.png" alt="Login Icon">cancellation</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/dormance.htm?actionCode=loadDormanceForm"><img class="card-img-top mx-auto" style="width:13%;" src="Domance.png" alt="Login Icon"><br>e-Dormance</a>
        </div> 
     <button onclick="myFunction()" type="button" class="e-Registration" ></button>   
     </fieldset>

  <fieldset class="MyProfile">
     <button onclick="myFunction1()" type="button" class="MyProfile" > MyProfile</button>
        <div id="MyProfile">
        <a href="https://itax.kra.go.ke/KRA-Portal/login.htm"><img class="card-img-top mx-auto" style="width:13%;" src="pen.png" alt="Login Icon">Change Password</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/eRegIndi.htm?actionCode=loadReprintMainPage&operation=viewProfile"><img class="card-img-top mx-auto" style="width:13%;" src="profile.png" alt="Login Icon">View Profile</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/account.htm?actionCode=showGeneralLedgerForm"><img class="card-img-top mx-auto" style="width:13%;" src="books.png" alt="Login Icon"><br>myLedger</a>
        </div> 
      <button onclick="myFunction1()" type="button" class="MyProfile" ></button>   
   </fieldset>

 
   <fieldset class="e-Return">
     <button onclick="myFunction2()" type="button" class="e-Return" > e-Return</button>
        <div id="e-Return">
        <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm"><img class="card-img-top mx-auto" style="width:13%;" src="return.png" alt="Login Icon">e-Return</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/eReturns.htm"><img class="card-img-top mx-auto" style="width:13%;" src="files.png" alt="Login Icon">Consult</a>
      
        </div>  
      <button onclick="myFunction2()" type="button" class="e-Return" ></button>   
   </fieldset>
   </div>

   <div class="container2c2">
<fieldset class="e-Payments">
     <button onclick="myFunction3()" type="button" class="e-Payments" > e-Payments</button>
        <div id="e-Payments">
        <a href="https://itax.kra.go.ke/KRA-Portal/paymentRegistration.htm?actionCode=beforeLoadPRForm"><img class="card-img-top mx-auto" style="width:20%;" src="etr.png" alt="Login Icon">PaymentRe</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/trackYrStatusController.htm?actionCode=loadPage&caseType=PAY"><img class="card-img-top mx-auto" style="width:20%;" src="coin.png" alt="Login Icon">ConsultPayment</a>
      
        </div>  
      <button onclick="myFunction3()" type="button" class="e-Payments" ></button>   
   </fieldset>

<fieldset class="e-RealEstate">
<button onclick="myFunction4()" type="button" class="e-RealEstate" > e-RentalManager</button>
        <div id="e-RealEstate">
        <a href="eRentalmanagerConfiguration.php"><img class="card-img-top mx-auto" style="width:20%;" src="rental.png" alt="Login Icon">Rentals</a>
        <a href="eRentalmanagerReports.php"><img class="card-img-top mx-auto" style="width:20%;" src="bank.png" alt="Login Icon">GetReports</a>
      
        </div>  
      <button onclick="myFunction4()" type="button" class="e-RealEstate" ></button>   
   </fieldset>
  
   
<fieldset class="e-RetailBusiness">
<button onclick="myFunction5()" type="button" class="e-RetailBusiness" > e-RetailBusiness</button>
        <div id="e-RetailBusiness">
        <a href="#"><img class="card-img-top mx-auto" style="width:25%;" src="business.png" alt="">MacroBusiness</a>
        <a href="#">MicroBusiness</a>
        </div>   
      <button onclick="myFunction5()" type="button" class="e-RetailBusiness" ></button>   
   </fieldset>
</div>

<div class="container2c3">
<fieldset class="e-Cheques">
<button onclick="myFunction6()" type="button" class="e-Cheques" > e-Cheques</button>
        <div id="e-Cheques">
        <a href="#"><img class="card-img-top mx-auto" style="width:40%;" src="cheque1.png" alt="Login Icon"></a><br>
        <a href="#">POST</a>
        <a href="#">RECEIVE</a>
        </div>  
      <button onclick="myFunction6()" type="button" class="e-Cheques" ></button>   
   </fieldset>

<fieldset class="e-Employer">
<button onclick="myFunction7()" type="button" class="e-Employer" > e-Employer</button>
        <div id="e-Employer">
        <a href="#"><img class="card-img-top mx-auto" style="width:23%;" src="Employer.png" alt="Login Icon">Employer</a>
        <a href="#"><img class="card-img-top mx-auto" style="width:20%;" src="Employees.png" alt="Login Icon"> Employee</a>
        </div> 
      <button onclick="myFunction7()" type="button" class="e-Employer" ></button>   
   </fieldset>

<fieldset class="e-Suppliers_Contractor">
<button onclick="myFunction8()" type="button" class="e-Suppliers_Contractor" > e-Suppliers/Contractor</button>
        <div id="e-Suppliers_Contractor">
        <a href="#"><img class="card-img-top mx-auto" style="width:18%;" src="contractor1.png" alt="">Contractor</a>
        <a href="#"><img class="card-img-top mx-auto" style="width:22%;" src="Supplier1.png" alt=""> Supplier</a>
        </div> 
      <button onclick="myFunction8()" type="button" class="e-Suppliers_Contractor" ></button>   
   </fieldset>
</div>
 
</div>
</div>
    </div>
    <div class="container4">
    <img class="card-img-top mx-auto" style="width:100%;" src="krafooter.png" alt="Login Icon">
    </div>
 

    <script class="e-Registration">
          function myFunction() {
            var x = document.getElementById("e-Registration");
            if (x.style.display === "none") {
              x.style.display = "block";
            } else {
              x.style.display = "none";
            }
          }
          </script>

        <script class="MyProfile" >
          function myFunction1() {
           var x = document.getElementById("MyProfile");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-Return" >
          function myFunction2() {
           var x = document.getElementById("e-Return");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-Payments" >
          function myFunction3() {
           var x = document.getElementById("e-Payments");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-RealEstate" >
          function myFunction4() {
           var x = document.getElementById("e-RealEstate");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-RetailBusiness" >
          function myFunction5() {
           var x = document.getElementById("e-RetailBusiness");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-Cheques" >
          function myFunction6() {
           var x = document.getElementById("e-Cheques");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-Employer" >
          function myFunction7() {
           var x = document.getElementById("e-Employer");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-Suppliers_Contractor" >
          function myFunction8() {
           var x = document.getElementById("e-Suppliers_Contractor");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	
            <script class="e-Import_Export" >
          function myFunction9() {
           var x = document.getElementById("e-Import_Export");
            if (x.style.display === "none") {
             x.style.display = "block";
             } else {
             x.style.display = "none";
              }
               }
          </script>	

	</div>
	</center>
</body>
</html>
		
			