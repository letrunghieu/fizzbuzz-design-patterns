<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Visitor;

use HieuLe\FizzBuzz\Visitor\Node\BuzzNode;
use HieuLe\FizzBuzz\Visitor\Node\FizzBuzzNode;
use HieuLe\FizzBuzz\Visitor\Node\FizzNode;
use HieuLe\FizzBuzz\Visitor\Node\OtherNode;

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
