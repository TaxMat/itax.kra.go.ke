<?php


if (strlen($_POST["password"]) < 4) {
    die("Password must be at least 4 characters");
}

if (strlen($_POST["KRAPIN"]) < 10) {
    die("KRAPIN must be at least 10 characters");
}

if ( ! preg_match("/[A-Z]/", $_POST["KRAPIN"])) {
    die("KRAPIN must contain at least one number");
}


if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO iTaxsignup ( KRAPIN,NationalID,Contact, FirstName, LastName,
Station, County, District, POSTCODE, Address, password_hash)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssssssss",
                
                  $_POST["KRAPIN"],
                  $_POST["NationalID"],
                  $_POST["Contact"],
                  $_POST["FirstName"],
                  $_POST["LastName"],
                  $_POST["Station"],
                  $_POST["County"],
                  $_POST["District"],
                  $_POST["POSTCODE"],
                  $_POST["Address"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: loginiTax.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("KRAPIN already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}


