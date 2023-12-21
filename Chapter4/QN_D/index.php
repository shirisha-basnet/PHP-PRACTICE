<?php

try {
    $result = divideNumbers(10, 0);
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
} finally {
    echo " This will always be executed.";
}

function divideNumbers($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

?>
