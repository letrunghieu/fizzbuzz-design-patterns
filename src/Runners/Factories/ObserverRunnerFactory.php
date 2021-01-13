<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Runners\Factories;

use HieuLe\FizzBuzz\Observers\ObserverRunner;
use HieuLe\FizzBuzz\Observers\Subscribers\FizzBuzSubscriber;
use HieuLe\FizzBuzz\Observers\Subscribers\NewLineSubscriber;
use HieuLe\FizzBuzz\Runners\RunnerInterface;

class ObserverRunnerFactory implements RunnerFactoryInterface
{

    public function make(): RunnerInterface
    {
        return new ObserverRunner([
            new FizzBuzSubscriber(3, 5),
            new NewLineSubscriber()
        ]);
    }
}
