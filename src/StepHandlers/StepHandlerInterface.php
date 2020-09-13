<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers;

interface StepHandlerInterface
{
    public function handle(int $number): void;
}
