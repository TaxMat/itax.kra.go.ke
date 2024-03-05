<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM iTaxsignup
                    WHERE NationalID = '%s'",
                   $mysqli->real_escape_string($_POST["NationalID"]));
    
                   $result = $mysqli->query($sql);
    
                   $user = $result->fetch_assoc();
                   
                   if ($user) {
                       
                       if (password_verify($_POST["password"], $user["password_hash"])) {
                           
                           session_start();
                           
                           session_regenerate_id();
                           
                           $_SESSION["user_id"] = $user["id"];
                           
                           header("Location: dashboard.php");
                           exit;
                       }
                   }
                   
                   $is_invalid = true;
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
margin-top: 1px;
margin-bottom: 4px;
width: 960px;
height: 100px;
background-color: white;
}

.container1 {
border: 0px solid #B22222;
margin-top: 1px;
margin-bottom: 4px;
width: 960px;
height: 150px;
background-color: white;
}


.container2 {
border: 0px solid #B22222;
margin-top: 1px;
margin-bottom: 4px;
width: 960px;
height: 20px;
background-color: red;
}

.container2a {
  position: absolute;
  width: 935px;
  border: 1px solid BLACK;
  padding: 10px;
  height: 500px;
  background-color: #B6B6B4;
  font-size: 14px; 
  margin-top: 2px;
  margin-right: 0px;
  border: 3px double black;
  
}

.container2b {
  position: absolute;
  width: 330px;
  padding: 10px;
  height: 110px;
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
  border: 1px double;
  
}

.container2c {
  position: absolute;
  width: 950px;
  border: 1px solid BLACK;
  padding: 8px;
  height: 55px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 25px;
  margin-right: 0px;
  margin-right: 0px;
}
.container2d {
  position: absolute;
  width: 365px;
  border: 1px ;
  padding: 10px;
  height: 12px;
  background-color: #B6B6B4;
  margin-top: 0px;
  margin-right: 0px;
  margin-right: 0px;
  color:  red;
  padding: 6px 6px;
  display: block;
  text-align: left;
  font-size:  18px;
}


.container2e {
  position: absolute;
  width: 370px;
  border: 0px solid #B6B6B4;
  padding: 10px;
  height: 160px;
  background-color: #B6B6B4;
  font-size: 14px;
  margin-top: 128px;
  font-size:  15px;
  text-align: left;
  color:  black;
}
.container2e5 {
  position: absolute;
  width: 370px;
  border: 0px solid #B6B6B4;
  padding: 10px;
  height: 145px;
  background-color: #B6B6B4;
  font-size: 15px;
  margin-top: 310px;
  text-align: left;
  color:  black;
}
.container2e2 {
  position: absolute;
  width: 559px;
  border: 0px #E5E4E2;
  padding: 10px;
  height: 340px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: -38px;
  right: 0px;
  left: 376px;
  font-size:  21px;
  text-align: left;
  color:  black;
}

.container2e4 {
  position: absolute;
  width: 563px;
  border: 1px solid #E5E4E2;
  height: 70px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 390px;
  right: 0px;
  left: 376px;
  font-size:  14px;
  text-align: left;
  padding: 6px;6px;
}

.container2e3 {
  position: absolute;
  width: 300px;
  border: 0px #E5E4E2;
  padding: 10px;
  height: 158px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 210px;
  right: 0px;
  font-size:  13px;
  text-align: left;
  color:  black;
}

.container2e6 {
  position: absolute;
  width: 249px;
  border: 0px #E5E4E2;
  padding: 10px;
  height: 158px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 210px;
  right: 310px;
  font-size:  13px;
  text-align: left;
  color:  black;
}
.container2e7 {
  position: absolute;
  width: 160px;
  border: 1px blacks;
  padding: 10px;
  height: 158px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 10px;
  right: 10px;
  left: 0px;
  font-size:  15px;
  text-align: left;
  color:  black;
}

.container2e8 {
  position: absolute;
  width: 155px;
  border: 2px #E5E4E2;
  padding: 10px;
  height: 158px;
  background-color: ;
  font-size: 14px;
  margin-top: 10px;
  right: 50px;
  left: px;
  font-size:  15px;
  text-align: left;
  color:  black;
}

.container2e9 {
  position: absolute;
  width: 383px;
  border: 0px #E5E4E2;
  padding: 10px;
  height: 158px;
  background-color: #E5E4E2;
  font-size: 14px;
  margin-top: 10px;
  right: 20px;
  font-size:  15px;
  text-align: left;
  color:  black;
}

.container2f {
  position: absolute;
  width: 950px;
  border: 1px solid BLACK;
  padding: 10px;
  height: 22px;
  background-color: grey;
  font-size: 14px;
  margin-top: 60px;
  margin-right: 0px;
  margin-right: 0px;
  text-align: center;
}
.container3 {
border: 0px solid black;
margin-top: 0px;
margin-bottom: 4px;
width: 960px;
height: 530px;
background-color: white;
padding: 10x;
}

.container4 {
border: 2px solid #838996;
margin-top: 1px;
margin-bottom: 4px;
width: 960px;
height: 130px;
background-color: white;
}

input[type=KRAPIN], select {
  width: 40%;
    padding: 4px 8px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid red;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
	  text-align: center;
    font-size: 16px;
}

input[type=text], select {
  width: 40%;
    padding: 4px 8px;
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
    width: 40%;
    padding: 4px 8px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid red;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
	  text-align: center;
    font-size: 16px;
}


button{
    width:23%;
    padding: 5px 3px;
    margin: 1px 0;
    display: inline-block;
    border-radius: 1px;
    box-sizing: border-box;
    background-color: #DC143C;
    color: white;
    margin: 2px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: center;
}

.button4 {border-radius: 19px;}

label {
  color: black;
  font-weight: bold;
  width: 160px;
  float: left;
  margin: 1px 1;
}
label:after { content: " *"; color: #e32; }

input[type=submit]:hover {
    background-color: #45a049;
}

ul.kraloginheader {
padding: 2px 0px;
list-style: none;
margin-bottom: 0px;
width: 960px;
height: 30px;
background-color: red;
margin-top: 0px;
}
ul.kraloginheader li {
  display: inline;
  font-size: 16px;
  text-align: right;
}
ul.kraloginheader li+li:before {
  padding: 8px;
  color: white;
  content: "|\00a0";
}
ul.kraloginheader li a {
  color: white;
  text-decoration: none;
  font-size: 14px;
  padding: 0px 0px;

}
ul.kraloginheader li a:hover {
  color: #01447e;
  text-decoration: underline;
  text-align: left;
}

div.container2e4 a:hover {
  color: #01447e;
  text-decoration: underline;
  
}



</style>

<body>
<center>
<div1>
<ul class="kraloginheader">
<li><a href="#"> Welcome to iTax Online Service Area </a></li>
  <li><a href="https://itax.kra.go.ke/KRA-Portal/main.htm">FAQs</a></li>
  <li><a href="https://itax.kra.go.ke/KRA-Portal/contentManagement.htm?actionCode=viewDownloads&viewType=static&linkFrom=LP">Forms</a></li>
  <li><a href="https://kenya-revenue-authority.custhelp.com/app/ask/session/L3RpbWUvMTY3NjQ1NTY3Ny9nZW4vMTY3NjQ1NTY3Ny9zaWQvZlVpTUZHbHIwbEFTUVNhWU80QzRMek9IRk9ZZyU3RW85eTglN0V0bUdlZTZrQUhwVWhYUjdRdGFsaEdBcHZ4UjJLeGh2aVNvNTNaTzlhJTdFZmJ0aVo0JTdFa2xvUlo0bmI3eUdzVUdualJqMUJybnA2bTBZVnhGOHd2VXBwcWclMjElMjE=">Report Problem</a></li>
  <li><a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=showContactUs&viewType=static&linkFrom=LP">Contact Us</a></li>
  <li><a href="https://www.kra.go.ke/web-help/index.htm">Online Help</a></li>
  <li><a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=displayChildMenus&&parentMenuId=ITAX%20Videos&&menyType=HOMELINK">iTax Videos</a></li>
</ul>
	
<div class="container1">
    <img class="card-img-top mx-auto" style="width:100%;" src="kraheaderlogin.png" alt="Login Icon">
 
</div>

<div class="container3">

<div class="container2a">
<div class="container2d">
Do you have a PIN?
</div><br></br>
<div class="container2b">

    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="POST">
    <input type="text" id="text"  class="NationalID" name="NationalID"
               value="<?= htmlspecialchars($_POST["NationalID"] ?? "") ?>" placeholder="National ID" required>
        <input type="password" id="text" value="" class="NationalID" name="password" 
        placeholder="Enter PIN" minlength="4" maxlength="4" required />
        <br/>
        <button class="button button4">Continue</button>
        </div>
        <div class="container2e">
        Do you want to apply for a PIN?</br>

        <p style="display:inline-block;">
        <a href="https://itax.kra.go.ke/KRA-Portal/eRegIndi.htm"><img class="card-img-top mx-auto" style="width:16%;" src="kraregisterbutton2.png" alt="" ></a>
        New PIN Registration </br>To get a New PIN,<a href="https://itax.kra.go.ke/KRA-Portal/eRegIndi.htm">Click Here</a>
        </p>
        <div class="container2d">
        <a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=comingSoon&viewType=static&linkFrom=LP">Guidline for PIN Registration</a>
        </div>
        </div>
        <div class="container2e5"><br>
        Manufacturer Authorization
        <p style="display:inline-block;">
        <a href="https://itax.kra.go.ke/KRA-Portal/manufacturerAuthorizationController.htm?actionCode=appForManufacturerAuth"><img class="card-img-top mx-auto" style="width:16%;" src="kraregisterbutton2.png" alt="" ></a>
        Manufacturer Authorization </br>To authorize manufacturer,<a href="https://itax.kra.go.ke/KRA-Portal/manufacturerAuthorizationController.htm?actionCode=appForManufacturerAuth">Click Here</a>
        </p>
        </div>
        <div class="container2e2">
        iTax Online eServices
        <div class="container2e7">
        PIN Checker<br><br>To verify PIN, Click Here
        </div>
        <div class="container2e9">
        TCC/Exemption/Excise <br>License Checker<br><br>To verify your Tax <br>
        compliance/Exemption <br>Certificate/Excise <br>License,Click Here
        </div>
        <div class="container2e8">
        WHT Checker<br><br>To verify a Withholding <br>Certificate,Click Here
        </div>
        </div>
        <div class="container2e3"><br><br><br>
        Agent Checker<br>
        To verify Witholding Agent,<a href="https://itax.kra.go.ke/KRA-Portal/pinChecker.htm?actionCode=loadWthPage&viewType=static">Click Here</a><br><br><br>
        Invoice Number Checker<br>
        To verify Control Unit Invoice Number,<a href="https://itax.kra.go.ke/KRA-Portal/invoiceNumberChecker.htm?actionCode=loadPageInvoiceNumber">Click Here</a>
        </div>
        <div class="container2e6"><br><br>
        Status Checker<br>
        To consult status of your applications,<a href="https://itax.kra.go.ke/KRA-Portal/trackYrStatusController.htm?actionCode=loadPage&viewType=static">Click Here</a><br><br><br>
        Control Unit Checker<br>
        To verify Control Unit Serial Number,<a href="https://itax.kra.go.ke/KRA-Portal/serialNumberChecker.htm?actionCode=loadPageSerialNumber&viewType=static">Click Here</a>
        </div>
        <div class="container2e4">
          Need Assistance?<br>
        <a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=showContactUs&viewType=static&linkFrom=LP"><img class="card-img-top mx-auto" style="width:6%;" src="kraofficephone.png" alt="" >Contact Us</a>
        <a href="https://kenya-revenue-authority.custhelp.com/app/ask/session/L3RpbWUvMTY3NjQ1NTY3Ny9nZW4vMTY3NjQ1NTY3Ny9zaWQvZlVpTUZHbHIwbEFTUVNhWU80QzRMek9IRk9ZZyU3RW85eTglN0V0bUdlZTZrQUhwVWhYUjdRdGFsaEdBcHZ4UjJLeGh2aVNvNTNaTzlhJTdFZmJ0aVo0JTdFa2xvUlo0bmI3eUdzVUdualJqMUJybnA2bTBZVnhGOHd2VXBwcWclMjElMjE=">
        <img class="card-img-top mx-auto" style="width:6%;" src="kraexclamation.png" alt="" >Report Problem</a>
        <a href="https://itax.kra.go.ke/KRA-Portal/main.htm?actionCode=showFAQ&operation=viewCategory&viewType=static"><img class="card-img-top mx-auto" style="width:6%;" src="kracubes.png" alt="" >FAQs</a>
        <a href="https://www.kra.go.ke/web-help/index.htm"><img class="card-img-top mx-auto" style="width:6%;" src="kraredquestionmark.png" alt="" >Online Help</a>
        </div>
        
     </div>
     </div>

  
    </div>
    
    <div class="container4">
    <img class="card-img-top mx-auto" style="width:100%;" src="krafooter.png" alt="Login Icon">
    </div>
    <form method="POST">
    
				</form>
        </div>
	</center>
</body>
</html>