<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Bridges\ValueIterators;

use HieuLe\FizzBuzz\Bridges\Value;

class InternalValueIterator implements ValueIteratorInterface
{
    private int $min;
    private int $max;
    private int $currentValue;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
        $this->currentValue = $this->min;
    }

    public function hasNext(): bool
    {
        return $this->currentValue <= $this->max;
    }

    public function next(): void
    {
        $this->currentValue++;
    }

    public function current(): Value
    {
        return new Value($this->currentValue);
    }
}
