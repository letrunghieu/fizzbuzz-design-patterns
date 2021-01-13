<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Iterators;

use HieuLe\FizzBuzz\Factories\NodeFactory;
use HieuLe\FizzBuzz\Visitors\Nodes\NodeInterface;

class VisitorNodeIterator
{
    private int $min;
    private int $max;
    private int $currentValue;
    private NodeFactory $nodeFactory;

    public function __construct(NodeFactory $nodeFactory, int $min, int $max)
    {
        $this->nodeFactory = $nodeFactory;
        $this->min = $min;
        $this->max = $max;
        $this->currentValue = $this->min;
    }

    public function hasNext(): bool
    {
        return $this->currentValue <= $this->max;
    }

    public function current(): NodeInterface
    {
        return $this->nodeFactory->make($this->currentValue);
    }

    public function next(): void
    {
        $this->currentValue++;
    }
}
