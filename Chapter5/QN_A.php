<?php
 // Replace this with your actual server information if you want
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca_sl_4th";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$conn->close();
?>
