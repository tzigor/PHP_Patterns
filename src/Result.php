<?php

namespace src;

class Result
{
    public function __construct(
        public array $array,
        public Int $numOfItarations
    ) {
    }
}
