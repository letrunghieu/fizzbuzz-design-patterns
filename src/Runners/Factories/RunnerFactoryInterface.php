<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Runners\Factories;

use HieuLe\FizzBuzz\Runners\RunnerInterface;

interface RunnerFactoryInterface
{
    public function make(): RunnerInterface;
}
