<?php

class Calculator
{
    public function add(float $a, float $b):float {
        $this->history .= strval($a + $b) . PHP_EOL;
        return $a + $b;
    }

    public function powerOf(float $number, int $exponent):float|int {
        $this->history .= strval($number**$exponent) . PHP_EOL;
        return $number**$exponent;
    }

    public function divide(float $a, float $b):float {
        if($b == 0) {
            echo "Can't be divided by 0" . PHP_EOL;
            return 0;
        }
        $this->history .= strval($a / $b) . PHP_EOL;
        return $a / $b;

    }
    
    public function getHistory():string {
        return $this->history . PHP_EOL;
    }

    protected string $history = "";
}

$calc = new Calculator;
$calc->divide(5,2);
$calc->powerOf(5,2);
$calc->add(223,221);

echo "History:";
echo $calc->getHistory();
