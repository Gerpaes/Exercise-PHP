<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
      echo "Give a number: ";
      $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

      if ($input % 2 == 0) {
        echo "Number is even.";
        # code...
      }else {
        echo "Number is odd.";

            }
    }
}
