<?php

use MyException\DivideByZero;

include_once "vendor/autoload.php";

/**
 * @throws DivideByZero
 */
function divide($numerator, $denominator): float|int
{
    if ($denominator === 0) {
        throw new DivideByZero();
    }
    return $numerator / $denominator;
}

try {
    $result = divide(100, 5);
    echo $result."<br>";
    $result = divide(100, 0);
    echo $result;
} catch (DivideByZero $e) {
    echo $e;
}

