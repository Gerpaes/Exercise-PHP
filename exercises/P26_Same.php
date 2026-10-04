<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
       echo "Enter the first string:";
       $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
       echo "Enter the second string:";
       $input2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
       if($input === $input2){
        echo "Same";
       }else{
        echo "Different";
       }
    }
}
