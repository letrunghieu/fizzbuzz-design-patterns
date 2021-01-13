<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\Observers\CountingPublisher;
use HieuLe\FizzBuzz\Observers\Subscribers\FizzBuzSubscriber;
use HieuLe\FizzBuzz\Observers\Subscribers\NewLineSubscriber;

class Application
{
    public function run()
    {
        $publisher = new CountingPublisher();

        $publisher->subscribe(new FizzBuzSubscriber(3, 5));
        $publisher->subscribe(new NewLineSubscriber());

        for ($i = 1; $i <= 100; $i++) {
            $publisher->update($i);
        }
    }
}
