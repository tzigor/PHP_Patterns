<?php

namespace src;

class BinaryNode
{
    public $value;    // contains the node item
    public $left;     // the left child BinaryNode
    public $right;     // the right child BinaryNode

    public function __construct($item)
    {
        $this->value = $item;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree
{
    protected $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty(): bool
    {
        return $this->root === null;
    }

    public function setRootVal($item)
    {
        if ($this->isEmpty()) {
            $this->root = new BinaryNode($item);
        } else {
            $this->root->value = $item;
        }
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function getRootVal()
    {
        return $this->root->value;
    }

    public function insert($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            $this->root = $node;
        } else {
            $this->insertNode($node, $this->root);
        }
    }

    protected function insertNode($node, &$subtree)
    {
        if ($subtree === null) {
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                $this->insertNode($node, $subtree->right);
            } else if ($node->value < $subtree->value) {
                $this->insertNode($node, $subtree->left);
            } else {
                // reject duplicates
            }
        }
    }

    public function insertNodeLeft($node, &$subtree)
    {
        if ($subtree === null) {
            $subtree = $node;
        } else {
            $this->insertNodeLeft($node, $subtree->left);
        }
    }

    public function insertLeft($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            $this->root = $node;
        } else {
            $this->insertNodeLeft($node, $this->root);
        }
    }

    public function insertNodeRight($node, &$subtree)
    {
        if ($subtree === null) {
            $subtree = $node;
        } else {
            $this->insertNodeRight($node, $subtree->right);
        }
    }

    public function insertRight($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            $this->root = $node;
        } else {
            $this->insertNodeRight($node, $this->root);
        }
    }

    public function getLeft(): BinaryTree
    {
        $tree = new BinaryTree();
        $tree->root = $this->root->left;
        return $tree;
    }

    public function getRight(): BinaryTree
    {
        $tree = new BinaryTree();
        $tree->root = $this->root->right;
        return $tree;
    }
}
