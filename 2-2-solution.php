<?php
// Vuln     ::: This code vuln to SQL Injection as it directly use $id from input payload, also the user and password is hardcoded in php file, its better to put in env variable / keyvault
// Solution ::: Use prepared statement for query, use env for user and password

// Get database credentials from environment variables
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');


$id = $_GET['id'];
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Checking if connection success
if ($mysqli->connect_error) {
    die("Connection to mysql failed: " . $mysqli->connect_error);
}

if ($stmt = $mysqli->prepare("SELECT username FROM users WHERE id = ?")) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_object()) {
        print_r($row);
    }
    $stmt->close();
}

$mysqli->close();



?>
