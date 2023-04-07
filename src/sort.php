<?php

require_once(__DIR__ . '/bubbleSort.php');
require_once(__DIR__ . '/shakerSort.php');
require_once(__DIR__ . '/Result.php');
require_once(__DIR__ . '/quickSort.php');
require_once(__DIR__ . '/heapSort.php');

use function src\bubbleSort;
use function src\shakerSort;
use function src\quickSort;
use function src\heapSort;

for ($i = 0; $i < 50; $i++) {
    $arr[$i] = rand(0, 50);
}

print_r($arr);

$result = bubbleSort($arr);
print_r($result);

$result = shakerSort($arr);
print_r($result);

$result = quickSort($arr, 0, 49);
print_r($result);

$result = heapSort($arr);
print_r($result);
