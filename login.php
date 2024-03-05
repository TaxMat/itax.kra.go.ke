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
input[type=text], select {
    width: 87%;
    padding: 6px 14px;
    margin: 3px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
    text-align: center;
    font-size: 16px;
}

input[type=password], select {
    width: 87%;
    padding: 6px 14px;
    margin: 3px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    cursor: pointer;
    text-align: center;
    font-size: 17px;
}



input[type=submit]:hover {
    background-color: #45a049;
}

button {
    width: 50%;
    padding: 6px 14px;
    margin: 3px 0;
    display: inline-block;
    border-radius: 3px;
    box-sizing: border-box;
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
 background-image: url("bg.jpg");
 align-items: center;
 justify-content: center;
}

.form19{
        width:260px;
        height: 510px;
        display:flex;
        flex-direction: column;
        backdrop-filter: blur(5px);
        border:0px solid #72582c;
        border-radius:6px;
        align-items: center;
        background-image: url("phone.jpg");
    
    }
</style>
<body>
    <center>
    <br>
    <div class="form19">
        
            <br><br>
   
 <h2 style="color:white;">Citizen Login </h2>
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
   
    
    <form method="POST">
        
    <input type="text" id="text"  class="NationalID" name="NationalID"
               value="<?= htmlspecialchars($_POST["NationalID"] ?? "") ?>" placeholder="National ID" required>
        <input type="password" id="text" value="" class="NationalID" name="password" 
        placeholder="Enter PIN" minlength="4" maxlength="4" required />
        <br/>
        <button>Log in</button>
        <br>
    
           
                <dive class="remember">
                    <input type="checkbox" checked>
                        <span>remember Me</span>
                   
                        
            <p style="color:white;">forgot password<a href="resetpasswordCitizen.php">Reset</a></p>  
            <p style="color:white;">Citizen<a href="signupCitizens.php">sign up here</a></p>
            <p style="color:white;">Visitors <a href="loginvisitors.php">Login here</a></p>
            </div>
            </div>
            </div>
            </form>
    </center>
</body>
</html>