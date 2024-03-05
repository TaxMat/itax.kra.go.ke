
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>TaxSpy</title>
        <link rel="stylesheet" href="style.css">
     
    </head>
<style>
input[type=text], select {
    width: 87%;
    padding: 6px 16px;
    margin: 1px 0;
    display: inline-block;
    border: 4px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    text-align: center;
    font-size: 17px;
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
        height: 500px;
        display:flex;
        flex-direction: column;
        backdrop-filter: blur(5px);
        border:0px solid #72582c;
        border-radius:6px;
        align-items: center;
        background-image: url("phone.jpg");
    
    }
</style>
<center>
<br>
	
<body>
<div class="form19">
<br><br><br>
			<form method="POST">
                    
            <?php include 'generate.php'?>
					<input type="text" id="text" value="" class="form-control" name="barcode"/>
					<br />
					<a href="" ><button class="btn btn-primary" name="generate">PRINT</button></div>
					<br />
					

				
			</form>
</div>
            </center>
		
</body>
</html>