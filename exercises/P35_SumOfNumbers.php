<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        $sum = 0;
         do {
            echo "Give a number: ";
            $a = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $sum += $a;
        } while ($a != 0);
        echo "Sum of the numbers: $sum\n";
    }
}

