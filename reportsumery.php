<!DOCTYPE html>
<html>
<head>
<title>Kenya Revenue Authority</title>
<link rel="icon" type="image/x-icon" href="kra.png">
<style>
   	body {
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
        max-height: 120vh;
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
        max-height: 30vh;
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

input[type=date], select {
  width:15%;
  padding: 1px 2px;
  margin: 3px 0;
  border: 3px double black;
  width: 17%;
  cursor: pointer;

}

input[type=submit], select {
    width:15%;
    padding: 1px 2px;
    margin: 3px 0;
    border-radius: 1px;
    background-color: #DC143C;
    color: white;
    border-radius: 2px;
    cursor: pointer;
    float: center;
    font-size: 17px;

}
input[type=submit]:hover {
  background-color: green;
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

label[type=text1], select {
 padding: 1px 2px; 
  margin: 2px;
  float: right;
  border: 1px double black;
  cursor: pointer;
  text-align: center;
  width: 10%;
  background-color: red;
  color: white;
}



label[type=text], select {
  color: black;
  font-size: 20px;
  width: 100px;
  float: center;
  margin: 0px ;
  
}


input[type=text3], select {
  padding: 1px 2px; 
  margin: 2px;
  float: left;
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


.container3 {
border: 0px solid black;
margin-top: -3px;
margin-bottom: 4px;
width: 1000px;
height: 800px;
color:black;
background-color: white;
}

.container4 {
border: 0px solid #838996;
margin-top: -2px;
margin-bottom: 0px;
width: 1000px;
height: 130px;
background-color: white;
}


  
    input[type=text1], select {
        padding: 1px 2px; 
  margin: 1px;
  float: right;
  border: 1px double black;
  cursor: pointer;
  text-align: center;
  width: 10%;
  background-color: red;
  color: white;
}

input[type=text2]:hover {
  background-color: red;
}





table{  
        border-collapse: collapse;  
         
    }  
th,td{  
    border: 1px solid green;   
    padding: 10px;  
}
tr,th{  
    border: 2px solid green;   
    padding: 2px;  
}
th,tr{  
    border: 1px solid green;   
    padding: 1px;  
}

</style>
</head>

<center>
<div class="container1">
    <img class="card-img-top mx-auto" style="width:100%;" src="kraheader3.png" alt="Login Icon">
 
    </div>

	
<div class="container3">
<a href="eRentalmanagerReports.php" style="color:red">
<input type="text3"  value="<<Back" readonly="readonly" ></a>
<label type="text">Report Summery</label> 
<a href="#" style="color:red"><input type="text1"  value="Print" readonly="readonly" ></a>
<div class="tbl-fixed">
<table class="table table-striped">

<thead>
	<tr>
		<th> Door </th>
		<th> GR </th>
		<th> GRentPaid </th>
		<th> Net </th>
		<th> Tax </th>
		<th> Arears </th>
		<th> Date</th>
    <th> Time</th>
	</tr>
</thead>
<tbody>
<?php
include('connect2.php');
$result = $db->prepare("SELECT * FROM itaxrentalpayment");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>
<tr class="record">
<td><?php echo $row['Door']; ?></td>
<td><?php echo $row['GrossPaid']; ?></td>
<td><?php echo $row['GrossPaid']; ?></td>
<td><?php echo $row['NetPaid']; ?></td>
<td><?php echo $row['TaxValuePaid']; ?></td>
<td><?php echo $row['GrossRentOverdue']; ?></td>
<td><?php echo date("M d, y", strtotime($row['Transactiondate'])) ?></td>
<td><?php echo date("h:m:s", strtotime($row['Transactiondate'])) ?></td>
</tr>
<?php
}
?>
</tbody>

<thead>
	<tr>
		
		<th colspan="2">Total </th>
		<th>
		<?php
			$results = $db->prepare("SELECT sum(GrossPaid) FROM itaxrentalpayment");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo $rows['sum(GrossPaid)'];
			
			}
			?>
		</th>
		<th>
		<?php
			$results = $db->prepare("SELECT sum(GrossPaid) FROM itaxrentalpayment");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo $rows['sum(GrossPaid)'];
			
			}
			?>
		</th>
		<th> 
		<?php
			$results = $db->prepare("SELECT sum(NetPaid) FROM itaxrentalpayment");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo $rows['sum(NetPaid)'];
			
			}
			?>
		</th>
		<th> 
			<?php
			$results = $db->prepare("SELECT sum(TaxValuePaid) FROM itaxrentalpayment");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo $rows['sum(TaxValuePaid)'];
			
			}
			?>
		</th>
		<th>
		<?php
			$results = $db->prepare("SELECT sum(GrossRentOverdue) FROM itaxrentalpayment");
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
			echo $rows['sum(GrossRentOverdue)'];
			
			}
			?>
		</th>
	</tr>
</thead>
</table>
    </div>
    </div>
    <div class="container4">
    <img class="card-img-top mx-auto" style="width:100%;" src="krafooter.png" alt="Login Icon">
    </div
    </html>
    </head>