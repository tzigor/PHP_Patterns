<?php

require_once __DIR__ . '/BinaryTree.php';

use src\BinaryTree;

function calc($operation, $operand1, $operand2)
{
    switch ($operation) {
        case '+':
            return $operand1 + $operand2;
            break;
        case '-':
            return $operand1 - $operand2;
            break;
        case '*':
            return $operand1 * $operand2;
            break;
        case '/':
            if ($operand2 > 0) return $operand1 / $operand2;
            else return null;
            break;
        case '^':
            return $operand1 ** $operand2;
            break;
    }
}

function evaluate(BinaryTree $parseTree)
{
    $leftCalc = $parseTree->getLeft();
    $rightCalc = $parseTree->getRight();
    if ($leftCalc->getRoot() !== null && $rightCalc->getRoot() !== null) {
        return calc($parseTree->getRootVal(), evaluate($leftCalc), evaluate($rightCalc));
    } else {
        return $parseTree->getRootVal();
    }
}

function buildTree(string $formula): BinaryTree
{
    $stack = new SplDoublyLinkedList;
    $arr = str_split(str_replace(' ', '', $formula));
    $eTree = new BinaryTree();
    $eTree->insert(null);
    $stack->push($eTree);
    $currentTree = $eTree;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == '(') {
            $currentTree->insertLeft(null);
            $stack->push($currentTree);
            $currentTree = $currentTree->getLeft();
        } elseif (is_numeric($arr[$i])) {
            $currentTree->setRootVal((int) ($arr[$i]));
            $currentTree = $stack->pop();
        } elseif ($arr[$i] == '+' || $arr[$i] == '-' || $arr[$i] == '*' || $arr[$i] == '/' || $arr[$i] == '^') {
            $currentTree->setRootVal($arr[$i]);
            $currentTree->insertRight(null);
            $stack->push($currentTree);
            $currentTree = $currentTree->getRight();
        } elseif ($arr[$i] == ')') {
            $currentTree = $stack->pop();
        }
    }
    return $eTree;
}


$eTree = buildTree('((8+2)+(7*2))');
echo evaluate($eTree);
