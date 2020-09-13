<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers\Strategies;

use HieuLe\FizzBuzz\StepHandlers\StepHandlerStrategyInterface;

class BuzzStrategy implements StepHandlerStrategyInterface
{

    public function canSatisfy(int $number): bool
    {
        return $number % 5 == 0;
    }

    public function handle(int $number): void
    {
        echo "Buzz" . PHP_EOL;
    }
}
