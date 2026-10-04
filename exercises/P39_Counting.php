<?php

class P39_Counting
{
    public function main(): void
    {
        $limit = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = 0; $i <= $limit; $i++) {
            echo "$i\n";
        }
       
    }
}
