<?php

require_once(__DIR__ . '/bubbleSort.php');
require_once(__DIR__ . '/Search/LinearSearch.php');
require_once(__DIR__ . '/Search/binarySearch.php');
require_once(__DIR__ . '/deleteElement.php');

use function src\bubbleSort;
use function src\deleteElement;
use function src\Search\LinearSearch;
use function src\Search\binarySearch;

for ($i = 0; $i < 50; $i++) {
    $arr[$i] = rand(0, 50);
}

$result = bubbleSort($arr);
$arr = $result->array;

$result = binarySearch($arr, 35);
print_r($result);

$arr = array(1, 3, 78, 1, 3, 45, 56, 23, 5, 8, 41);
$result = bubbleSort($arr);
$arr = $result->array;
$arr = deleteElement($arr, 1);
print_r($arr);

$n = 0;
$num = 1;
do {
    $num++;
    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = false;
            break;
        }
    }
    if ($flag) $n++;
} while ($n !== 1001);

echo 'Prime number #1001 - ' . $num;
