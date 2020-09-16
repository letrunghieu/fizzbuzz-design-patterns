<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\Factories\FizzBuzzStrategyFactory;
use HieuLe\FizzBuzz\Factories\FizzBuzzStrategyFactoryBuilder;
use HieuLe\FizzBuzz\Strategies\BuzzStrategy;
use HieuLe\FizzBuzz\Strategies\DefaultStrategy;
use HieuLe\FizzBuzz\Strategies\FizzBuzzStrategy;
use HieuLe\FizzBuzz\Strategies\FizzStrategy;

class Application
{
    public function run()
    {
        $strategyFactoryBuilder= FizzBuzzStrategyFactoryBuilder::getInstance();
        $strategyFactoryBuilder->setFizzNumber(5)
            ->setBuzzNumber(7);

        $strategyFactory = $strategyFactoryBuilder->build();

        $strategyHandler = new StrategyHandler([
            $strategyFactory->createFizzBuzzStrategy(),
            $strategyFactory->createFizzStrategy(),
            $strategyFactory->createBuzzStrategy(),
            new DefaultStrategy()
        ]);

        for ($i = 1; $i <= 100; $i++) {
            $strategyHandler->handle($i);
        }
    }
}
