<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Visitors\Nodes;

use HieuLe\FizzBuzz\Visitors\VisitorInterface;

class FizzNode extends AbstractNode
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitFizzNode($this);
    }
}
