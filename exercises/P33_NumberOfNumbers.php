<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        $count = 0;
         do {
            echo "Give a number: ";
            $a = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($a != 0) {
                # code...
                $count++;
                }
                
                echo "Number of numbers: $count\n";
           } while ($a != 0);
    }
}
