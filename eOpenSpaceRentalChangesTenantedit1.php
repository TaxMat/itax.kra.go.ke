<?php
	include('conn1.php');
	$ID=$_GET['ID'];
	$query=mysqli_query($conn,"select * from `OpenSpaceRentalCalculater` where ID='$ID'");
	$row=mysqli_fetch_array($query);
?>
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

.container1b {
border: 0px;
margin-top: -33px;
margin-bottom: 0px;
width: 950px;
height: 30px;
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
.container2b {
  position: absolute;
  width: 890px;
  border: 2px solid red;
  padding: 10px;
  height: 130px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 0px;
  left: 20px;
  color:  red;
  padding: 6px 12px;
  display: block;
  text-align: center;
  font-size:  16px;
  
}

.container2b1 {
  position: absolute;
  width: 890px;
  border: 2px solid BLACK;
  padding: 10px;
  height: 130px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 170px;
  left: 20px;
  color:  red;
  padding: 6px 12px;
  display: block;
  text-align: center;
  font-size:  16px;

  
}

.container2b2 {
  position: absolute;
  width: 890px;
  border: 2px solid #45a049;
  padding: 10px;
  height: 130px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 340px;
  left: 20px;
  color:  red;
  padding: 6px 12px;
  display: block;
  text-align: center;
  font-size:  16px;
  
}

.container2c {
  position: absolute;
  width: 950px;
  border: 0px ;
  padding: 8px;
  height: 0px;
  background-color: white;
  font-size: 14px;
  margin-top: 0px;
  margin-right: 0px;
  margin-right: 0px;
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
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 560px;
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

table{  
        border-collapse: collapse;  
        width: 100%;   
       
    }  
th,td{  
    border: 2px solid green;   
    padding: 12px;  
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
background-color: green;
width: 90%;
height: 5px;
border-top: 5px dotted black;
}
</style>

<body>
<center>

	

<div class="container3">
<div id="background">

</div>

<div id="content">
<div class="container2c">

<form method="POST" action="eOpenSpaceRentalChangesTenantUpdate.php?ID=<?php echo $ID; ?>">

<div class="container1b">
<a href="eOpenSpaceRentalChangesTenantIndex1.php" style="color:red"><input type="text2"  value="<<< Back" readonly="readonly" ></a>

<a href="eOpenSpaceRentalChangesTenantedit1.php?ID=<?php echo $row['ID']; ?>" target="_blank" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span></a>
</div>

<table>
   
    <thead>
      
     <tr>
      <th colspan="2">INVOICE NO:
      <a href="eOpenSpaceRentalChangesTenantedit1.php?ID=<?php echo $row['ID']; ?>" style="color:red">
<input type="text3"  value="<?php echo $row['SuiteUniqueNo']; ?> " readonly="readonly" ></a>
SRNO:
<a href="eOpenSpaceRentalChangesTenantedit1.php?ID=<?php echo $row['ID']; ?>" style="color:red">
<input type="text3"  value="<?php echo"".date("Ymdhs"); ?> " readonly="readonly" ></a>
      </th>
      <th colspan="2">
      <img class="card-img-top mx-auto" style="width:100%;" src="kralogo.png" alt="Login Icon">
      </th>
      <th><?php
			
      echo "Date:" . date("d.M");
              echo "," . date("Y");
              
             
    ?></th>
     </tr>
     
     <tr>
      <td colspan="2">
       <strong>Landlord:</strong><br>
       KRA:<input type="text2"  value="<?php echo $row['KRAPIN'];?> " readonly="readonly" >.<br>
       PlotNO:<input type="text2"  value="<?php echo $row['PlotNo'];?> " readonly="readonly" >.<br>
       Block:<input type="text2"  value="<?php echo $row['BlockName'];echo $row['SuiteNo'];?> " readonly="readonly" >.<br>
      </td>
      <td colspan="2" >
      <strong>Kenya Revenue Authority.<br>
       Times Tower, Haile Selassie Avenue.<br>
       P. O. Box 48240 - 00100,Nairobi Kenya.<br>
       +254 20 4 999 999,+254 711 099 999.<br></strong>
      </td>
      <td colspan="2">
       <strong>Tenant:</strong><br>
       <input type="text2"  value="<?php echo $row['LastName'];echo $row['FirstName'];?> " readonly="readonly" ><br>
       ID:<input type="text2"  value="<?php echo $row['IDNO'];?> <?php echo $row['PassPortNO'];?> " readonly="readonly" ><br>
       Cell:<input type="text2"  value="<?php echo $row['ContactNO'];?> " readonly="readonly" >
      </td>
     </tr>
    </thead>
    <tbody>

    
      
     <tr>
      <th>DoorUniqueNo</th>
      <th>NET Rental<br> Ksh</th>
      <th>GROSS Rental <br> Ksh</th>
      <th>Month/Year</th>
      <th>Arrears KSH</th>
     </tr>
     <tr>
      <td>
      <input type="text2"  value="<?php echo $row['SuiteUniqueNo'];?> " readonly="readonly" >
      </td>
      <td><input type="text2"  value="<?php echo $row['NetRent']; ?>" readonly="readonly" ></td>
      <td><input type="text2"  value="<?php echo $row['GrossRent']; ?>" readonly="readonly" ></td>
      <td><?php echo "". date("M.Y"); ?> </td>
      
      <td><input type="text2"  value="(<?php echo $row['GrossRent']; ?>)+" readonly="readonly" >
        (0.00)</td>
     </tr>
    
    </tbody>
    
    <tfoot>
     <tr>
      <th colspan="3">Subtotal</th>
      <td> <input type="text2"  value="<?php echo $row['NetRent']; ?>" readonly="readonly" ></td>
      <td> 120.00</td>
     </tr>
     <tr>
      <th colspan="2">Tax</th>
      <td> 7.5% (<?php echo $row['TAXRate']; ?>)</td>
    
      <td><input type="text2"  value="<?php echo $row['TaxValue']; ?>" readonly="readonly" ></td>
      <td>5.80</td>
     </tr>
     <tr>
      <th colspan="3">Grand Total</th>
      <td><input type="text2"  value="<?php echo $row['GrossRent']; ?>" readonly="readonly" ></td>
      <td>$ 20.80</td>
     </tr>
     
    </tfoot>
   </table>
</div>
</div>
    </div>
    
 

    </form>

	</div>
	</center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
    window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
</script>
<hr>
</html>