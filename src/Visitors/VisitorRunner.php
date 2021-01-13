<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Visitors;

use HieuLe\FizzBuzz\Runners\RunnerInterface;
use HieuLe\FizzBuzz\Visitors\Factories\NodeFactory;
use HieuLe\FizzBuzz\Visitors\Iterators\VisitorNodeIterator;

class VisitorRunner implements RunnerInterface
{
    public function run(): void
    {
        $iterator = new VisitorNodeIterator(
            new NodeFactory(3, 5),
            1,
            100
        );

        $visitor = new StdOutVisitor();
        while ($iterator->hasNext()) {
            $node = $iterator->current();
            $node->accept($visitor);

            $iterator->next();
        }
    }
}
