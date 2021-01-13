<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Visitors\Nodes;

abstract class AbstractNode implements NodeInterface
{
    private int $rawValue;

    public function __construct(int $rawValue)
    {
        $this->rawValue = $rawValue;
    }

    public function getRawValue(): int
    {
        return $this->rawValue;
    }
}
