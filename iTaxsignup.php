
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>TaxSpy</title>
        <link rel="stylesheet" href="style.css">
     
    </head>
<style>
input[type=text], select {
    width: 80%;
    padding: 4px 8px;
    margin: 2px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
}

input[type=file], select {
    width: 80%;
    padding: 4px 8px;
    margin: 2px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
}
input[type=password], select {
    width: 80%;
    padding: 6px 12px;
    margin: 2px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
    text-align: center;
    font-size: 16px;
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
    <h3 style="color:black;">iTax SignUp </h3>

            <form action="process-iTaxsignup.php" method="post" id="signup" novalidate>
            <form method="POST">
            KRAPIN:
            <input type="text" name="KRAPIN" value=" "  minlength="12" maxlength="12" required>
           FirstName:
            <input type="text" name="FirstName" value=" " required>
           LastName:
            <input type="text" name="LastName"value="" required>
            <input type="file" class="box" accept="image/jpg, image/gpeg, image/png">
           Password:
            <input type="password" id="password" name="password" placeholder="Enter PIN" minlength="4" maxlength="4" required>
           Confirm Password:
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm PIN" minlength="4" maxlength="4" required>
                <button type="submit" class="btn btn-primary">Submit </button>
                </form>
                </form>
                </center>
                
    </body>
</html>