<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Factories;

use HieuLe\FizzBuzz\Visitor\Node\BuzzNode;
use HieuLe\FizzBuzz\Visitor\Node\FizzBuzzNode;
use HieuLe\FizzBuzz\Visitor\Node\FizzNode;
use HieuLe\FizzBuzz\Visitor\Node\NodeInterface;
use HieuLe\FizzBuzz\Visitor\Node\OtherNode;

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
