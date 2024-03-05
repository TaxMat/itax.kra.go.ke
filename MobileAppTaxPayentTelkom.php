<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Kenya Revenue Authority</title>
        <link rel="icon" type="image/x-icon" href="kra.png">
        <link rel="stylesheet" href="style.css">
     
    </head>
<style>
input[type=kra], select {
    width: 40%;
    padding: 0px 0px;
    margin: 0px 0;
    display: inline-block;
    border: 0px solid black;
    border-radius: 0px;
    box-sizing: border-box;
    text-align: center;
    font-size: 14px;
    cursor: pointer;
    background-color: #eeeeee;
}
input[type=text], select {
    margin: 2px 0;
    text-align: center;
    font-size: 14px;
    cursor: pointer;
}
input[type=file], select {
    margin: 2px 0;
    text-align: left;
    font-size: 14px;
    cursor: pointer;
}
input[type=password], select {
    margin: 2px 0;
    text-align: left;
    font-size: 14px;
    cursor: pointer;
}


button {
    width: 30%;
    background-color: #FF0000;
    color: white;
    padding: 4px 8px;
    margin: 4px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    font-size: 16px;
}



body {
  background-color: #E5E4E2;
  justify-content: center;
  padding: 12px 10%;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}


.form19{
        width:360px;
        height: 370px;
        display:flex;
        flex-direction: column;
        backdrop-filter: blur(3px);
        border:1px solid green;
        border-radius:6px;
        align-items: center;
        background-color: white;
        background-image: url("phone.jpg");
    
    }

    label {
  color: black;
 
  width: 160px;
  float: left;
  margin: 1px;
}
label:after { content: " *"; color: #e32; }

input[type=submit]:hover {
    background-color: #45a049;
}
fieldset{
  
  border: 1px solid green;
  background-color: #eeeeee;
 
}

legend {
 background-color: white;
  color: white;
  padding: 4px 8px;
  border:1px solid green;
 
 
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
height: 1px;
border-top: 2px bold black;
}



form header {
  margin: 0 0 20px 0; 
}
form header div {
  font-size: 90%;
  color: #999;
}
form header h2 {
  margin: 0 0 5px 0;
}
form > div {
  clear: both;
  overflow: hidden;
  padding: 1px;
  margin: 0 0 10px 0;
}
form > div > fieldset > div > div {
  margin: 0 0 5px 0;
}
form > div > label,

form > div > div,
form > div > fieldset > div {
  width: 75%;
  float: right;
}


input[type=text],
input[type=email],
input[type=url],
input[type=password],
textarea {
	width: 50%;
  border-top: 1px solid #ccc;
  border-left: 1px solid #ccc;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
input[type=text],
input[type=email],
input[type=url],
input[type=password] {
  width: 50%;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=url]:focus,
input[type=password]:focus,
textarea:focus {
  outline: 0;
  border-color: #4697e4;
}

@media (max-width: 400px) {
  form > div {
    margin: 0 0 15px 0; 
  }
  form > div > label,
  legend {
	  width: 60%;
    float: none;
    margin: 0 0 5px 0;
  }
  form > div > div,
  form > div > fieldset > div {
    width: 60%;
    float: none;
  }
  input[type=text],
  input[type=email],
  input[type=url],
  input[type=password],
  textarea,
  select {
    width: 40%; 
  }
}
</style>
    <body>
    <center>

    <div class="form19">
    
   

            <form action="process-iTaxsignup.php" method="post" id="signup" novalidate>
            <form method="POST">

            <fieldset> <legend><img class="card-img-right mx-auto" style="width:80%;" src="Telkom.png" alt=""></legend>
            
    
    <a href="MobileAppTaxPayentOptions.php"> GoBack </a>
    <a href="logout.php">Logout</a>
   
           </fieldset>
         
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
          
     

            <fieldset>
          <legend> </legend>
          


          <label class="desc" id="title1"  for="Field1">PhoneNo</label>
          <input id="Field1" name="Field1" type="text" oninput="valid(this)" class="field text fn" value="" size="8" tabindex="1"  minlength="10" maxlength="10" required>
         
            <label class="desc" id="title1" for="Field1">Ksh</label>
            <input id="Field1" name="Field1" oninput="valid(this)" type="text" class="field text fn" placeholder="0.00" value="" size="8" tabindex="1" minlength="6" maxlength="6" required>
            
        
            </fieldset>
         
          
            <button>Submit</button>
           
            </form>
            <br><br><br><br>
            <hr class="horizontal_line">
                <img class="card-img-right mx-auto" style="width:100%;" src="krafooter.png" alt="Login Icon">
                
                
                </center>
                
    </body>
</html>