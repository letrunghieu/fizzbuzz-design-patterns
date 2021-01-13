<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\Factories\NodeFactory;
use HieuLe\FizzBuzz\Iterators\VisitorNodeIterator;
use HieuLe\FizzBuzz\Visitors\StdOutVisitor;

class Application
{
    public function run()
    {
        $visitor = new StdOutVisitor();

        $iterator = new VisitorNodeIterator(
            new NodeFactory(3, 5),
            1,
            100
        );

        while ($iterator->hasNext())
        {
            $iterator->current()->accept($visitor);
            $iterator->next();
        }
    }
}
