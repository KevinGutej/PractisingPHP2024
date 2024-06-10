<?php

class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Denominator cannot be zero");
        }

        $this->numerator = $numerator;
        $this->denominator = $denominator;
        $this->simplify();
    }

    public function add(Fraction $otherFraction) {
        $newNumerator = $this->numerator * $otherFraction->denominator + $otherFraction->numerator * $this->denominator;
        $newDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function subtract(Fraction $otherFraction) {
        $newNumerator = $this->numerator * $otherFraction->denominator - $otherFraction->numerator * $this->denominator;
        $newDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function multiply(Fraction $otherFraction) {
        $newNumerator = $this->numerator * $otherFraction->numerator;
        $newDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($newNumerator, $newDenominator);
    }

    public function divide(Fraction $otherFraction) {
        if ($otherFraction->numerator == 0) {
            throw new Exception("Cannot divide by zero");
        }

        $newNumerator = $this->numerator * $otherFraction->denominator;
        $newDenominator = $this->denominator * $otherFraction->numerator;
        return new Fraction($newNumerator, $newDenominator);
    }

    private function simplify() {
        $greatestCommonDivisor = $this->calculateGCD(abs($this->numerator), $this->denominator);
        $this->numerator /= $greatestCommonDivisor;
        $this->denominator /= $greatestCommonDivisor;
    }

    private function calculateGCD($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    public function __toString() {
        return $this->numerator . "/" . $this->denominator;
    }
}

?>
