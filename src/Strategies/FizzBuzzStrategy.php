<?php


namespace HieuLe\FizzBuzz\Strategies;


class FizzBuzzStrategy implements StrategyInterface
{

    public function canApplicable(int $number): bool
    {
        return $number % 15 == 0;
    }

    public function handle(int $number): void
    {
        echo "FizzBuzz" . PHP_EOL;
    }
}
