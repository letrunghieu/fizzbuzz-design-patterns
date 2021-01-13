<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Runners\Factories;

use HieuLe\FizzBuzz\Bridges\BridgeRunner;
use HieuLe\FizzBuzz\Bridges\ValueIterators\InternalValueIterator;
use HieuLe\FizzBuzz\Bridges\Writers\EchoWriter;
use HieuLe\FizzBuzz\Runners\RunnerInterface;

class SimpleBridgeRunnerFactory implements RunnerFactoryInterface
{
    public function make(): RunnerInterface
    {
        return new BridgeRunner(
            new InternalValueIterator(1, 100),
            new EchoWriter()
        );
    }
}
