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
        $strategyFactoryBuilder= new FizzBuzzStrategyFactoryBuilder();

        $strategyFactory = $strategyFactoryBuilder->build();

        $strategyHandler = new StrategyHandler([
            $strategyFactory->createFizzBuzzStrategy(),
            $strategyFactory->createFizzStrategy(),
            $strategyFactory->createBuzzStrategy(),
            new DefaultStrategy()
        ]);

        $numberIterator = new NumberIterator(1, 100);
        while ($numberIterator->hasNext()) {
            $strategyHandler->handle($numberIterator->current());
            $numberIterator->next();
        }
    }
}
