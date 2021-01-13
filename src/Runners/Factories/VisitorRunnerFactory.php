<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Runners\Factories;

use HieuLe\FizzBuzz\Runners\RunnerInterface;
use HieuLe\FizzBuzz\Visitors\VisitorRunner;

class VisitorRunnerFactory implements RunnerFactoryInterface
{
    public function make(): RunnerInterface
    {
        return new VisitorRunner();
    }
}
