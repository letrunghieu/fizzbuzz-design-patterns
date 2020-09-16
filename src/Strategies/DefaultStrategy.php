<?php


namespace HieuLe\FizzBuzz\Strategies;


class DefaultStrategy implements StrategyInterface
{

    public function canApplicable(int $number): bool
    {
        return true;
    }

    public function handle(int $number): void
    {
        echo $number . PHP_EOL;
    }
}
