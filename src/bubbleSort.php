<?php

namespace src;

require_once(__DIR__ . '/Result.php');

use src\Result;

function bubbleSort($array): Result
{
    $n = 0;
    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
            $n++;
        }
    }
    return new Result($array, $n);
}
