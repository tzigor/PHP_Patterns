<?php

namespace src;

use src\Result;

function quickSort(&$arr, $low, $high)
{
    $n = 0;
    $i = $low;
    $j = $high;
    $middle = $arr[floor(($low + $high) / 2)];
    do {
        while ($arr[$i] < $middle) ++$i;
        while ($arr[$j] > $middle) --$j;
        if ($i <= $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $i++;
            $j--;
        }
        $n++;
    } while ($i < $j);
    if ($low < $j) {
        quickSort($arr, $low, $j);
    }
    if ($i < $high) {
        quickSort($arr, $i, $high);
    }
    return new Result($arr, $n);
}
