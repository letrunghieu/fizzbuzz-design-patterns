<?php


namespace HieuLe\FizzBuzz\Strategies;


class FizzStrategy implements StrategyInterface
{

    public function canApplicable(int $number): bool
    {
        return $number % 3 == 0;
    }

    public function handle(int $number): void
    {
        echo "Fizz" . PHP_EOL;
    }
}
