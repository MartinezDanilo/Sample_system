<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database_alumni_list";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
