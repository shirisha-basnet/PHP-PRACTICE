<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca_sl_4th";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Deleting data from the table using ID
$idsToDelete = [2, 3];

foreach ($idsToDelete as $id) {
    $sql = "DELETE FROM myInfo WHERE ID=$id";

    if ($conn->query($sql) !== TRUE) {
        echo "Error deleting data: " . $conn->error;
    }
}

echo "Data deleted successfully";

$conn->close();
?>
