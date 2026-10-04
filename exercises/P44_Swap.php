<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

       echo "Give two indices to swap:\n";
        $firstIndex = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $secondIndex = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $temp = $array[$firstIndex];
        $array[$firstIndex] = $array[$secondIndex];
        $array[$secondIndex] = $temp;

        echo "\n\n";

        foreach ($array as $value) {
            echo $value . "\n";
        }
       
    }
}
