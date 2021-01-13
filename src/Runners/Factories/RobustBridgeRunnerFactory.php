<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Runners\Factories;

use HieuLe\FizzBuzz\Bridges\BridgeRunner;
use HieuLe\FizzBuzz\Bridges\ValueIterators\ExternalValueIterator;
use HieuLe\FizzBuzz\Bridges\Writers\ConsoleWriterAdapter;
use HieuLe\FizzBuzz\Runners\RunnerInterface;
use Symfony\Component\Console\Output\ConsoleOutput;

class RobustBridgeRunnerFactory implements RunnerFactoryInterface
{
    public function make(): RunnerInterface
    {
        return new BridgeRunner(
            new ExternalValueIterator(1, 100),
            new ConsoleWriterAdapter(new ConsoleOutput())
        );
    }
}
