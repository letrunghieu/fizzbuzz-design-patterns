<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers\Strategies;

use HieuLe\FizzBuzz\StepHandlers\StepHandlerStrategyInterface;

class NumberStrategy implements StepHandlerStrategyInterface
{

    public function canSatisfy(int $number): bool
    {
        return true;
    }

    public function handle(int $number): void
    {
        echo $number . PHP_EOL;
    }
}
