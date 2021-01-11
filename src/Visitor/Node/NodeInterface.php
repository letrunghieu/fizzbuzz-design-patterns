<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Visitor\Node;

use HieuLe\FizzBuzz\Visitor\VisitorInterface;

interface NodeInterface
{
    public function accept(VisitorInterface $visitor): void;

    public function getRawValue(): int;
}
