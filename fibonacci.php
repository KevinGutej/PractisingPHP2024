<?php
function fibonacci($n) {
    $sequence = [];
    if ($n <= 0) {
        return $sequence;
    }

    $sequence[] = 0;
    if ($n == 1) {
        return $sequence;
    }

    $sequence[] = 1;
    for ($i = 2; $i < $n; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }

    return $sequence;
}


$n = 10; 
$fibonacciSequence = fibonacci($n);

echo "Fibonacci sequence for first $n terms: " . implode(", ", $fibonacciSequence);
?>
