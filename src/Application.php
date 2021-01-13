<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\Runners\Factories\ObserverRunnerFactory;
use HieuLe\FizzBuzz\Runners\Factories\RobustBridgeRunnerFactory;
use HieuLe\FizzBuzz\Runners\Factories\RunnerFactoryInterface;
use HieuLe\FizzBuzz\Runners\Factories\SimpleBridgeRunnerFactory;
use HieuLe\FizzBuzz\Runners\Factories\VisitorRunnerFactory;

class Application
{

    public function run()
    {
        $pattern = $_SERVER['argv'][1] ?? '';

        $runner = $this->getRunnerFactory($pattern)->make();

        $runner->run();
    }

    private function getRunnerFactory(string $patternName): RunnerFactoryInterface
    {
        switch ($patternName) {
            case 'observer':
                return new ObserverRunnerFactory();

            case 'visitor':
                return new VisitorRunnerFactory();

            case 'simple-bridge':
                return new SimpleBridgeRunnerFactory();

            case 'robust-bridge':
                return new RobustBridgeRunnerFactory();

            default:
                throw new \RuntimeException("Invalid pattern name [{$patternName}], valid options are: observer, visitor, simple-bridge, robust-bridge");
        }
    }
}
