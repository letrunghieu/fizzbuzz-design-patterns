<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Factories;

use HieuLe\FizzBuzz\Visitors\Nodes\BuzzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\FizzBuzzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\FizzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\NodeInterface;
use HieuLe\FizzBuzz\Visitors\Nodes\OtherNode;

class NodeFactory
{
    private int $fizzNumber;
    private int $buzzNumber;

    public function __construct(int $fizzNumber, int $buzzNumber)
    {
        $this->fizzNumber = $fizzNumber;
        $this->buzzNumber = $buzzNumber;
    }

    public function make(int $value): NodeInterface
    {
        switch (0) {
            case $value % ($this->fizzNumber * $this->buzzNumber):
                return new FizzBuzzNode($value);

            case $value % $this->fizzNumber:
                return new FizzNode($value);

            case $value % $this->buzzNumber:
                return new BuzzNode($value);

            default:
                return new OtherNode($value);
        }
    }
}
