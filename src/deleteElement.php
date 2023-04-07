<?php

namespace src;

require_once(__DIR__ . '/Search/binarySearch.php');

use function src\Search\binarySearch;

function deleteElement($arr, $el)
{
    do {
        $result = binarySearch($arr, $el);
        if ($result !== null)  array_splice($arr, $result->index, 1);
    } while ($result !== null);
    return $arr;
}
