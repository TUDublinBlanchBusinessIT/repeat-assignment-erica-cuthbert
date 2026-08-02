<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "choir_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>

<!-- refer to lec 5 notes -->