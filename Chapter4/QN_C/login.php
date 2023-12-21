<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];
    if ($enteredUsername == 'admin' && $enteredPassword == 'admin1234') {
        $_SESSION['username'] = $enteredUsername;

        setcookie('username', $enteredUsername, time() + 86400);
    } elseif ($enteredUsername == 'user' && $enteredPassword == 'password') {
        $_SESSION['username'] = $enteredUsername;

        setcookie('username', $enteredUsername, time() + 86400);
    } else {
        echo "Invalid username or password. <a href='index.php'>Try again</a>";
        exit();
    }

    header("Location: welcome.php");
    exit();
}
?>
