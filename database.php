<?php

$server   = "localhost";
$database = "dreamcities";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

?>
