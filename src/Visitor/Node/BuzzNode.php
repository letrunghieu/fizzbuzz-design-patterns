<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Visitor\Node;

use HieuLe\FizzBuzz\Visitor\VisitorInterface;

class BuzzNode extends AbstractNode
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitBuzzNode($this);
    }
}
