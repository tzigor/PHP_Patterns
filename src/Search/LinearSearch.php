<?php

namespace src\Search;

require_once(__DIR__ . '/Result.php');

use src\Search\Result;

function LinearSearch($myArray, $num)
{
    $n = 0;
    $count = count($myArray);
    for ($i = 0; $i < $count; $i++) {
        $n++;
        if ($myArray[$i] == $num) return new Result($i, $n);
        elseif ($myArray[$i] > $num) return null;
    }
    return null;
}
