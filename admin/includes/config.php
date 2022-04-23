<?php
$host= "localhost";
$username = "root";
$port = 8085;
$db_name = "tms";
$password = "";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
?>