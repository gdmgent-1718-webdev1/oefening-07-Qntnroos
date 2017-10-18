<?php 
function Fibonacci($length) {
    $x = 0;
    $y = 1;
    for ($i = 0; $i < $length; $i++) {
        $number = $x;
        $x = $y;
        $y = $number + $y;
        // Show numbers
        echo $x . "<br>" . PHP_EOL; 
    } 
}
echo Fibonacci(100);