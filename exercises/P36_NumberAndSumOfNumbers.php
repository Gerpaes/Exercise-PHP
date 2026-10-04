<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
       $count = 0;
       $sum = 0;
         do {
            echo "Give a number: ";
            $a = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($a != 0) {
                $count++;
                $sum += $a;
                }
                
                echo "Number of numbers: $count\n";
                echo "Sum of the numbers: $sum\n";
           } while ($a != 0);
    }
}
