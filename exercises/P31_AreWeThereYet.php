<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        do {
            echo "Give a number: ";
            $a = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        } while ($a != 4);
       
    }
}
