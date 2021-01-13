<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\Bridges\BridgeRunner;
use HieuLe\FizzBuzz\Bridges\ValueIterators\InternalValueIterator;
use HieuLe\FizzBuzz\Bridges\Writers\EchoWriter;
use HieuLe\FizzBuzz\Observers\CountingPublisher;
use HieuLe\FizzBuzz\Observers\Subscribers\FizzBuzSubscriber;
use HieuLe\FizzBuzz\Observers\Subscribers\NewLineSubscriber;

class Application
{
    public function run()
    {
        $runner = new BridgeRunner(
            new InternalValueIterator(1, 100),
            new EchoWriter()
        );

        $runner->run();
    }
}
