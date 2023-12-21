<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];
    if ($enteredUsername == 'admin' && $enteredPassword == 'admin1234') {
        $_SESSION['username'] = $enteredUsername;
    } elseif ($enteredUsername == 'user' && $enteredPassword == 'password') {
        $_SESSION['username'] = $enteredUsername;
    } else {
        echo "Invalid username or password. <a href='index.php'>Try again</a>";
        exit();
    }

    header("Location: welcome.php");
    exit();
}
?>
