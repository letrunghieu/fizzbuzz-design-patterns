<?php


namespace HieuLe\FizzBuzz\Strategies;


class BuzzStrategy implements StrategyInterface
{

    public function canApplicable(int $number): bool
    {
        return $number % 5 == 0;
    }

    public function handle(int $number): void
    {
        echo "Buzz" . PHP_EOL;
    }
}
