<?php

namespace src\Search;

require_once(__DIR__ . '/Result.php');

use src\Search\Result;

function binarySearch($myArray, $num)
{
    $n = 0;
    $left = 0;
    $right = count($myArray) - 1;
    while ($left <= $right) {
        $middle = floor(($right + $left) / 2);
        if ($myArray[$middle] == $num) {
            return new Result($middle, $n);
        } elseif ($myArray[$middle] > $num) {
            $right = $middle - 1;
        } elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
        $n++;
    }
    return null;
}
