<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca_sl_4th";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Updating data in the table
$dataToUpdate = [
    ['Shirisha Basnet', '9888777766', 'shirisha@yahoo.com'],
    ['Sarita Kumari', '9845678901', 'sarita@yahoo.com'],
    ['Gopal Sharma', '9861111222', 'gopal@hotmail.com'],
    ['Atikshya Gurung', '9812345678', 'atikshya@gmail.com']
];

foreach ($dataToUpdate as $update) {
    $name = $update[0];
    $phone = $update[1];
    $email = $update[2];

    $sql = "UPDATE myInfo SET Phone='$phone', Email='$email' WHERE Name='$name'";

    if ($conn->query($sql) !== TRUE) {
        echo "Error updating data: " . $conn->error;
    }
}

echo "Data updated successfully";

$conn->close();
?>
