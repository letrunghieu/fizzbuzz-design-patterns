<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Bridges;

class Value
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
