<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Visitors;

use HieuLe\FizzBuzz\Visitors\Nodes\BuzzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\FizzBuzzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\FizzNode;
use HieuLe\FizzBuzz\Visitors\Nodes\OtherNode;

class StdOutVisitor implements VisitorInterface
{

    public function visitFizzNode(FizzNode $node)
    {
        echo "Fizz" . PHP_EOL;
    }

    public function visitBuzzNode(BuzzNode $node)
    {
        echo "Buzz" . PHP_EOL;
    }

    public function visitFizzBuzzNode(FizzBuzzNode $node)
    {
        echo "FizzBuzz" . PHP_EOL;
    }

    public function visitOtherNode(OtherNode $node)
    {
        echo $node->getRawValue() . PHP_EOL;
    }
}
