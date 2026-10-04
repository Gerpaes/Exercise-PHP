<?php

class P19_Positivity
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number: ";
        // Prompt the user for input
       $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user
            if ((int)$input > 0) {
                echo "The number is positive.\n";
                # code...
            }else {
                echo "The number is not positive.\n";
            }
        // Check year value
       
    }
}
