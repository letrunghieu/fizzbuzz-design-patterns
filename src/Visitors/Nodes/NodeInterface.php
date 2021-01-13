<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Visitors\Nodes;

use HieuLe\FizzBuzz\Visitors\VisitorInterface;

interface NodeInterface
{
    public function accept(VisitorInterface $visitor): void;

    public function getRawValue(): int;
}
