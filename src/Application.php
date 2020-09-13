<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\StepHandlers\DefaultStepHandler;
use HieuLe\FizzBuzz\StepHandlers\Strategies\BuzzStrategy;
use HieuLe\FizzBuzz\StepHandlers\Strategies\FizzBuzzStrategy;
use HieuLe\FizzBuzz\StepHandlers\Strategies\FizzStrategy;
use HieuLe\FizzBuzz\StepHandlers\Strategies\NumberStrategy;

class Application
{
    public function run()
    {
        $handler = new DefaultStepHandler([
            new FizzBuzzStrategy(),
            new FizzStrategy(),
            new BuzzStrategy(),
            new NumberStrategy()
        ]);

        for ($i = 1; $i <= 100; $i++) {
            $handler->handle($i);
        }
    }
}
