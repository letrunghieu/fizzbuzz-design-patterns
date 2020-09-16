<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\Strategies\BuzzStrategy;
use HieuLe\FizzBuzz\Strategies\DefaultStrategy;
use HieuLe\FizzBuzz\Strategies\FizzBuzzStrategy;
use HieuLe\FizzBuzz\Strategies\FizzStrategy;

class Application
{
    public function run()
    {
        $strategyHandler = new StrategyHandler([
            new FizzBuzzStrategy(),
            new FizzStrategy(),
            new BuzzStrategy(),
            new DefaultStrategy()
        ]);

        for ($i = 1; $i <= 100; $i++) {
            $strategyHandler->handle($i);
        }
    }
}
