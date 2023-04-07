<?php

namespace src;

function shakerSort($array)
{
    $nIter = 0;
    $n = count($array);
    $left = 0;
    $right = $n - 1;
    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array(
                    $array[$i + 1],
                    $array[$i]
                );
                $nIter++;
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array(
                    $array[$i - 1],
                    $array[$i]
                );
                $nIter++;
            }
        }
        $left += 1;
    } while ($left <= $right);
    return new Result($array, $nIter);
}
