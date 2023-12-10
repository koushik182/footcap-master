<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ecommerce_database";  
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
