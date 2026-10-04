<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        echo "Search for? ";
        $searched = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $foundIndex = -1;

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] === $searched) {
                $foundIndex = $i;
                break;
            }
        }

        if ($foundIndex === -1) {
            echo "$searched was not found.\n";
        } else {
            echo "$searched is at index $foundIndex.\n";
        }
       
    }
}
