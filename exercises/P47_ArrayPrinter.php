<?php

class P47_ArrayPrinter
{
    public function main(): void
    {
        $array = [5, 1, 3, 4, 2];
        $this->printNeatly($array);
    }

    public function printNeatly(array $array): void
    {
        $lastIndex = count($array) - 1;

        for ($i = 0; $i <= $lastIndex; $i++) {
            echo $array[$i];

            if ($i < $lastIndex) {
                echo ", ";
            }
        }

        echo "\n";
       
    }
}
