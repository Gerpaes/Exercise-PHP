<?php

class P30_CarryOn
{
    public function main(): void
    {
        do {
            echo "Shall we carry on?\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
         } while ($input !== "no");
            
       
    }
}