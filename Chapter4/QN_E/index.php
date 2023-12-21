<?php
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Error on line $errline in $errfile<br>";
}

set_error_handler("customErrorHandler");

$undefinedVariable = $nonexistentArray[42];

restore_error_handler();
?>

<?php
// function customErrorHandler($errno, $errstr, $errfile, $errline) {
//     echo "<b>Error:</b> [$errno] $errstr<br>";
//     echo "Error on line $errline in $errfile<br>";
// }

// set_error_handler("customErrorHandler");

// // Initialize the array before using it
// $nonexistentArray = [];

// // Check if the array key exists before accessing it
// $undefinedVariable = isset($nonexistentArray[42]) ? $nonexistentArray[42] : null;

// restore_error_handler();
// ?>
