<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        $numC = $numA + $numB;
        $numD = $numA - $numB;
        $numE = $numA * $numB;
        $numF = $numA / $numB;
        // Write the program here
       echo "$numA + $numB = $numC\n" .
     "$numA - $numB = $numD\n" .
     "$numA * $numB = $numE\n" .
     "$numA / $numB = " . number_format($numF, 1, ".", "") . "\n";
       
    }
}
