<?php

namespace src\Search;

class Result
{
    public function __construct(
        public Int $index,
        public Int $numOfItarations
    ) {
    }
}
