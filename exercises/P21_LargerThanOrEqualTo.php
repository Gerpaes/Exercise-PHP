<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number: ";
        // Get input from the user
        $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Prompt the user for input
        echo "Give the second number: ";
        // Get input from the user
        $input2 = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value

    if ($input > $input2) {
         echo "Greater number is: $input\n";
    } elseif ($input2 > $input) {
        echo "Greater number is: $input2\n";
        # code...
    }else{
        echo "The numbers are equal!\n";
        # code...
    }
    
    }
}
