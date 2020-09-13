<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers\Strategies;

use HieuLe\FizzBuzz\StepHandlers\StepHandlerStrategyInterface;

class FizzBuzzStrategy implements StepHandlerStrategyInterface
{

    public function canSatisfy(int $number): bool
    {
        return $number % 15 == 0;
    }

    public function handle(int $number): void
    {
        echo "FizzBuzz" . PHP_EOL;
    }
}
