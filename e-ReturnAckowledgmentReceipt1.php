
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Kenyan Revenue Authority Rental |InvoiceNO:
      <?php echo $row['SuiteUniqueNo'];echo"|SRNO:".date("Ymdhs"); ?> </title>
      <link rel="icon" type="image/x-icon" href="kra.png">
    </head>
<style>
	body {
  font-family: "Helvetica", Sans-Serif;
  background-color: #E5E4E2;
  background-image: url("bg.jpg");
  align-items: left;
  justify-content: center;
  
}



input[type=text3], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  border: 0px;
  cursor: pointer;
  text-align: left;
  width: 65%;
  background-color: white;
  color: black;
  font-size: 16px;
}

input[type=text3]:hover {
  background-color: red;
}

input[type=text2], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  border: 0px;
  cursor: pointer;
  text-align: left;
  width: 80%;
  background-color: white;
  color: black;
  font-size: 16px;
}



.container {

margin-top: 1px;
margin-bottom: 0px;
width: 990px;
height: 120px;
color: black;
background-color: white;

}

.container1 {
border: 0px;
margin-top: -4px;
margin-bottom: 0px;
width: 300px;
height: 90px;
color: black;
background-color: white;
margin-right: 680px;
}

.container2 {
border: 0px;
margin-top: -110px;
margin-bottom: 0px;
width: 240px;
height: 90px;
color: black;
background-color: white;
margin-right: -750px;
text-align: right;

}
.container4 {
border: 0px solid #E5E4E2;
margin-top: -100px;
margin-bottom: 0px;
width: 410px;
height: 100px;
color: black;
margin-right: -100px;
background-color:#B6B6B4;
text-align: center;

}


.container5 {
margin-top: -8px;
margin-bottom: 0px;
width: 120px;
height: 30px;
color: black;
background-color: white;
text-align: left;
margin-right: 880px;

}
.container3 {
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 1200px;
background: #fff;
padding: 1em 1.35em;
border: 1px solid #c9c9c9;
box-shadow: 1px 1px 10px #0000003b;


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



input[type=tel], select {
    width: 50%;
    padding: 2px 8px;
    margin: 3px 0;
    display: inline-block;
    border: 0px;
    border-radius: 4px;
    font-size: 16px;   
    text-align: left; 
}

input[type=tel1], select {
    width: 20%;
    padding: 2px 80px;
    margin: 3px 0;
    display: inline-block;
    border: 0px;
    border-radius: 4px;
    font-size: 16px;  
    text-align: left; 
}

input[type=changes]:hover {
    background-color: grey;
}


table{  
        border-collapse: collapse;  
        width: 100%;   
       
    }  
th,td{  
    border: 2px solid black;   
    padding: 10px;  
}

hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  
  
}
.horizontal_line {
background-color: black;
width: 100%;
height: 2px;
border-top: 2px bold black;
}
</style>

<body>
<center>

	

<div class="container3">
<br>
<div class="container">
<div class="container1">
<img class="card-img-top mx-auto" style="width:100%;" src="kralogo.png" alt="Login Icon">
</div>
<div class="container4">
<form method="POST" action="eResidencialRentalChangesTenantUpdate.php">
   
<h2>e-Remittance Acknowledgment<br> Receipt</h2>
</div>
<div class="container2">
   <h4> For General Tax Questions<br>
       Contact KRA Call Centre<br>
       Tel: +254(020) 4999 999<br>
       Cell: +254(0711)099 999
       Email:callcentre@kra.go.ke</h4>

</div>
</div>



<div class="container5">
<h4>www.kra.go.ke</h4>
</div>
<hr class="horizontal_line"><br>
<table>
    <thead>
    <th colspan="5">
    Personal Information and Return Filing Details 
  
    </th>
    <tr>
    <td><strong>TaxPayer PIN</strong></td>
    <td>
    <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
    <input type="tel" name="KRAPIN" value="<?php echo $row['KRAPIN']; ?>"  readonly="readonly">
    
<?php
					}
				?>
    </td>
    <td><strong>Return Period</strong></td>
    <th colspan="3">
    
      <?php 
      echo "" . date("M.Y");
      ?>

    </th>
   
    </tr>
     <tr>
      <td>
       <strong> Name and Address</strong>
      </td>
      <td colspan="4">
      <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
    <input type="tel" name="FirstName" value="<?php echo $row['FirstName']; echo $row['LastName']; ?>"  readonly="readonly">
    <br>
    <input type="tel" name="County"  id="County"placeholder="County" value="<?php echo $row['Station']; ?>,<?php echo $row['County']; ?>,<?php echo $row['District']; ?>,<?php echo $row['POSTCODE']; ?>,<?php echo $row['Address']; ?>" readonly="readonly">
<?php
					}
				?>
   
      </td>
     
     </tr>
     
     <tr>
      <td >
       <strong>Name and Address of <br>
       Branch (if Applicable)
      </strong>
       
      </td>
      <td colspan="4" >
      <strong> N.A.</strong>
      </td>
      
     </tr>
    </thead>
    <tbody>

     <tr>
      <td>
      <strong>Tax Obligation <br>(Form Name)</strong>

      </td>
      <td><strong> Rental Income Tax</strong></td>
      <td><strong>Originat Or Amended </strong></td>
      <td colspan="2">Original</td>
     </tr>
     <tr>
      <td>
      <strong>Station</strong>
      </td>
      <td>
      <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
    <input type="tel" name="Station" value="<?php echo $row['Station']; ?>"  readonly="readonly">
    
<?php
					}
				?>
      </td>
      <td><strong>Acknowledgement</strong></td>
      <td colspan="2">  <strong>
      <?php
			
            echo "" . date("d/M/Y");
              echo "," . date("H:m:s");   
    ?></strong>
    </td>
    <tr>
      <td><strong>Return Number</strong></td>
      <td>
      KRA<?php echo "" . date("Ymdhm");?>
      </td>
      <td colspan="3">
     <strong> Barcode ####</strong>
     </td>
    </tr>
    </tbody>
   </table>
<br>

<table>
<?php
include('connect01.php');
$result = $db->prepare("SELECT * FROM itaxrentalpayment");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>
<?php
}
?>


  <thead>
    <tr>
      <th colspan="5">
      <strong>Return Summary</strong>
      </th>
    </tr>
    <tr>
    <th>Sr.NO.</th>
      <th><strong>Particulars</strong></th>
      <th colspan="2"><strong>(Amount Ksh)</strong></th>
    </tr>

     <tr>
      <th><strong>1.</strong></th>
      <td><strong>Total GrossRent Collected </strong></td>
      <th  colspan="2">
      <?php
$results = $db->prepare("SELECT sum(GrossPaid) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(GrossPaid)'];			
}
?>
      </th>
     </tr>
     <tr>
      <th><strong>2.</strong></th>
      <td><strong>Total Tax Deducted (7.5%of Total Gross Collection)</strong></td>
      <th  colspan="2"><strong>
      <?php
$results = $db->prepare("SELECT sum(TaxValuePaid) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(TaxValuePaid)'];
}
?></strong>
      </th>
     </tr>
     <tr>
      <th><strong>3.</strong></th>
      <td><strong>Total Tax Expected</strong></td>
      <th  colspan="2">
      <?php
$results = $db->prepare("SELECT sum(MonthlyTaxValue) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(MonthlyTaxValue)'];			
}
?>
      </th>
     </tr>
     <tr>
      <th><strong>4.</strong></th>
      <td><strong>Total Tax OverDue</strong></td>
      <th  colspan="2">
      <?php
$results = $db->prepare("SELECT sum(TaxOverdue) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(TaxOverdue)'];			
}
?>
      </th>
     </tr>
     <tr>
      <th><strong>5.</strong></th>
      <td><strong>Excess Tax Paid  </strong></td>
      <th  colspan="2">
      <?php
$results = $db->prepare("SELECT sum(ExcessTaxPaid) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(ExcessTaxPaid)'];			
}
?>
      </th>
     </tr>
  </thead>
</table>
<br>

<table>
  <thead>
    <tr>
      <th colspan="4">
      <strong>Payment Details(Payment Slip)</strong>
      </th>
      <td><strong>Payment ReceiptNo:</strong>
      <?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
    <input type="tel" name="KRAPIN" value="<?php echo $row['KRAPIN']; echo "" . date("Ymd"); ?>"  readonly="readonly">
    
<?php
					}
				?>
    
    </td>
    </tr>
    <tr>
    <th>Sr.NO.</th>
      <th><strong>Payment Type</strong></th>
      <th ><strong>Tax Obligation</strong></th>
      <th><strong>Tax Period</strong></th>
      <th><strong>Tax Due (Ksh)</strong></th>
    </tr>

     <tr>
      <th><strong>1.</strong></th>
      <td>Self Assessment Tax</td>
      <td>(0111)Rent Income Tax</td>
      <th> <?php 
      echo "" . date("M.Y");
      ?></th>
      <th>
      <strong>
      <?php
$results = $db->prepare("SELECT sum(MonthlyTaxValue) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(MonthlyTaxValue)'];			
}
?></strong>
      </th>
     </tr>
     <tr>
      <td colspan="4"><strong>Total Amount Paid (Ksh)</strong></td>
      <th>
      <strong>
      <?php
$results = $db->prepare("SELECT sum(TaxValuePaid) FROM itaxrentalpayment");
$results->execute();
for($i=0; $rows = $results->fetch(); $i++){
echo $rows['sum(TaxValuePaid)'];
}
?></strong>
      </th>
     </tr>
  </thead>
</table>
<br>
</form>
<strong>Note: We acknowledge receiving your Monthly Tax Remittance Payments Through Our Banks
  <br>Notice:Employers are reminded that the due date for PAYE Returns 
  and Remittance is the ninth day of each calender month.
</strong>
<hr class="horizontal_line">
    </div>
    </div>
	
	</center>
</body>
</html>








