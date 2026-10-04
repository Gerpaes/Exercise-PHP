<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here

    echo "Give points[0-100]: ";
    $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if($input < 0){
            echo "Grade: impossible!";
        }elseif ($input >= 0 && $input <= 49 ){
            echo "Grade: failed";
            # code...
        }elseif ($input >= 50 && $input <= 59) {
            echo "Grade: 1";
            # code...
        }elseif ($input >= 60 && $input <= 69) {
            # code...
            echo "Grade: 2";
        
        }elseif ($input >= 70 && $input <= 79) {
            # code...
            echo "Grade: 3";
        
        }elseif ($input >= 80 && $input <= 89) {
            # code...
            echo "Grade: 4";
        
        }elseif ($input >= 90 && $input <= 100) {
            # code...
            echo "Grade: 5";
        
        }elseif ($input > 100) {
            # code...
            echo "Grade: incredible!";
        }
    }
}
