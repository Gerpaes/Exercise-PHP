<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        $count = 0;
         do {
            echo "Give a number: ";
            $a = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($a < 0 && $a != 0) {
                $count++;
            }
        } while ($a != 0);
        echo "Number of negative numbers: $count\n";
    }
}

               
       
    