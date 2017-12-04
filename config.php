<?php 

// connect to DB
$servername = "localhost";
$username = "cs174";
$password = "default";
$database = "cs174";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('<p style="color:red">'."Database connection failed: " . $conn->connect_error);
}
// END of connect to DB
?>