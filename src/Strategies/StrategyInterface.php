<?php


namespace HieuLe\FizzBuzz\Strategies;


interface StrategyInterface
{
    public function canApplicable(int $number): bool;

    public function handle(int $number): void;
}
