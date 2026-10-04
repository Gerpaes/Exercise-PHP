<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        $count = 0;
        $sum = 0;

        do {
            echo "Give a number: ";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number !== 0) {
                $count++;
                $sum += $number;
            }
        } while ($number !== 0);
        $average = 0;

        if ($count > 0) {
            $average = $sum / $count;
        }

        echo "Average of the numbers: $average\n";
    }
}
