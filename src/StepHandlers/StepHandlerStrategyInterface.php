<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers;

interface StepHandlerStrategyInterface
{
    public function canSatisfy(int $number): bool;

    public function handle(int $number): void;
}
