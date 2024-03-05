<?php





if (strlen($_POST["password"]) < 4) {
    die("Password must be at least 4 characters");
}

if (strlen($_POST["Contact"]) < 10) {
    die("Contact must be at least 10 characters");
}


if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO MobileApp (KRAPIN,NationalID,FirstName,LastName,Contact, password_hash)
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssss",
                
                  $_POST["KRAPIN"],
                  $_POST["NationalID"],
                  $_POST["FirstName"],
                  $_POST["LastName"],
                  $_POST["Contact"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: MobileAppTaxPayLogin.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("NationalID already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}