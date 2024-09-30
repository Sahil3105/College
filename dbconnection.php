<?php
$host = "database-1.cdoqe0csqwm1.us-east-1.rds.amazonaws.com";  // Your RDS endpoint
$db_name = "stufeedb";        // Your database name
$username = "admin";          // Your RDS username
$password = "Sahil#12345";    // Your RDS password

try {
    // Create a new PDO instance
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
    // If connection fails, display an error message
    echo "Connection error: " . $exception->getMessage();
}
?>
