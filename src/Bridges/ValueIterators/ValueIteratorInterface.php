<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Bridges\ValueIterators;

use HieuLe\FizzBuzz\Bridges\Value;

interface ValueIteratorInterface
{
    public function hasNext(): bool;

    public function next(): void;

    public function current(): Value;
}
