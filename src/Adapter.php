<?php

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal ** 2) / 2;
        return $area;
    }
}

class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal ** 2) / 4;
        return $area;
    }
}

interface ISquare
{
    function squareArea(int $sideSquare);
}

interface ICircle
{
    function circleArea(int $circumference);
}

class Square implements ISquare
{
    protected $square;

    public function __construct()
    {
        $this->square = new SquareAreaLib();
    }

    function squareArea(int $sideSquare)
    {
        return $this->square->getSquareArea($sideSquare);
    }
}

class Circle implements ICircle
{
    protected $circle;

    public function __construct()
    {
        $this->circle = new CircleAreaLib();
    }

    function circleArea(int $circumference)
    {
        return $this->circle->getCircleArea($circumference);
    }
}
