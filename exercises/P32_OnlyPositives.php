<?php

class P32_OnlyPositives
{
    public function main(): void
    {
          do {
            echo "Give a number: ";
            $a = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($a < 0) {
                echo "Unsuitable number\n";
            } else {
                $b = $a * $a;
                echo "$b\n";
            }

        } while ($a != 0);
       
    }
}
