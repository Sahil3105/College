<?php
$host = "your-rds-endpoint";
$db_name = "stufeedb";
$username = "your-db-username";
$password = "your-db-password";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}
?>
