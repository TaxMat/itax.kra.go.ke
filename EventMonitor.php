<?php
include_once 'db_con.php';
$sql = "SELECT * from itaxrentalpayment";
$run = mysqli_query($dbc, $sql);
?>
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
        max-height: 80vh;
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
height: 600px;
color:black;
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
    padding: 2px;  
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

<body>
<center>

	<!-- Navbar -->
	

    <div class="container1">
    <img class="card-img-top mx-auto" style="width:100%;" src="kraheader3.png" alt="Login Icon">
 
    </div>

	
   

<div class="container3">
<a href="eRentalmanagerReports.php" style="color:red">
<input type="text3"  value="<<Back" readonly="readonly" ></a>
<label type="text">RealTime Event Monitor</label> 
<a href="EventMonitorprint.php" style="color:red"><input type="text1"  value="Print" readonly="readonly" ></a>
<div class="tbl-fixed">
      <table class="table table-striped">
          <thead>
  <tr>                       
         
          <th>Door</th>
          <th>MobileWallet</th>
          <th>PaidAmount</th>
          <th>NET</th>
          <th>TAX</th>
          <th>AdvancePay</th>
          <th>Arears</th>
          <th>PayBill NO</th>
          <th>AccountNo</th>
          <th>Transactiondate</th>
</tr>                                  
            </thead>
            <tbody>
            <?php 
             

             $con = mysqli_connect("localhost","root","","itaxrental");
              
               $query ="SELECT * FROM iTaxRentalPayment ORDER BY ID DESC ";
               
               
            $query_run = mysqli_query($con, $query);

                 if(mysqli_num_rows($query_run) > 0)
                 {
                 foreach($query_run as $row)
                    {
      ?>
                  <tr>
                   
                
                    <td><?= $row['Door']; ?></td>
                    <td><?= $row['MobileWalletLine']; ?></td>
                    <td><?= $row['GrossPaid']; ?></td>
                    <td><?= $row['NetPaid']; ?></td>
                    <td><?= $row['TaxValuePaid']; ?></td>
                    <td><?= $row['Claims']; ?></td>
                    <td><?= $row['GrossRentOverdue']; ?></td>
                    <td><?= $row['LandLordPayBill']; ?></td>
                    <td><?= $row['LandLordAccount']; ?></td>
                    <td><?= $row['Transactiondate']; ?></td>
                  </tr>
                  <?php


                 }
                }
                else
                {
                  ?>
                  <tr>
                <td colspan="3">No Record Found</td>
                  </tr>

                  <?php
                }
              
              ?>
             
            </tbody>
            </div>


        </div>
</div>

</div>
   
     </center>
</body>

</html>