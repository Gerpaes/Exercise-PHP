<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
       $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

       if ($input >= 0) {
        # code...
        echo "$input\n";
       } else {
        # code...
        $num = $input * -1;
        echo "$num\n";
       }
       
    }
}
