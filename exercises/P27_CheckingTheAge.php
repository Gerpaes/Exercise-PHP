<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
       echo "How old are you?";
       $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
     
       if($input >= 0 && $input <= 120){
        echo "Ok";
       }elseif($input  < 0){
        echo "Impossible!";
       }elseif($input > 120){
        echo "Impossible!";
       }
       
    }
}
