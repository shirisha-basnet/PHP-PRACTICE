<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Delete the username cookie
setcookie('username', '', time() - 3600);

// Redirect to the login page
header("Location: index.php");
exit();
?>
