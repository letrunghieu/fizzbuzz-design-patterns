<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers\Strategies;

use HieuLe\FizzBuzz\StepHandlers\StepHandlerStrategyInterface;

class FizzStrategy implements StepHandlerStrategyInterface
{

    public function canSatisfy(int $number): bool
    {
        return $number % 3 == 0;
    }

    public function handle(int $number): void
    {
        echo "Fizz" . PHP_EOL;
    }
}
