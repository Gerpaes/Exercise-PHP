<?php

class P40_CountingToHundred
{
    public function main(): void
    {
         $start = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = $start; $i <= 100; $i++) {
            echo "$i\n";
        }
       
    }
}
