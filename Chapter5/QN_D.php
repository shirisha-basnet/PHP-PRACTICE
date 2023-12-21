<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca_sl_4th";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Inserting persons into the table
$data = [
    ['Shirisha', 'F', 'Kathmandu', '9888888888', 'shirisha@gmail.com', 'Hello its me Shirisha, Web Developer'],
    ['Sarita', 'F', 'Pokhara', '9811111111', 'sarita@yahoo.com', 'Hello its me Sarita Kumari, Frontend Developer '],
    ['Gopal', 'M', 'Butwal', '9800000000', 'gopal@hotmail.com', 'Hello its me Gopal, Software Developer'],
    ['Atikshya', 'F', 'Chitwan', '9815555551', 'atikshya@gmail.com', 'Hello its me Atikshya, UI UX Designer']
];

foreach ($data as $person) {
    $name = $person[0];
    $gender = $person[1];
    $address = $person[2];
    $phone = $person[3];
    $email = $person[4];
    $aboutInfo = $person[5];

    $sql = "INSERT INTO myInfo (Name, Gender, Address, Phone, Email, AboutInfo) VALUES ('$name', '$gender', '$address', '$phone', '$email', '$aboutInfo')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error inserting data: " . $conn->error;
    }
}

echo "Data inserted successfully";

$conn->close();
?>
