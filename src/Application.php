<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz;

use HieuLe\FizzBuzz\StepHandlers\DefaultStepHandler;
use HieuLe\FizzBuzz\StepHandlers\Strategies\BuzzStrategy;
use HieuLe\FizzBuzz\StepHandlers\Strategies\FizzBuzzStrategy;
use HieuLe\FizzBuzz\StepHandlers\Strategies\FizzStrategy;
use HieuLe\FizzBuzz\StepHandlers\Strategies\NumberStrategy;

class Application
{
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            switch (0) {
                case ($i % 15):
                    echo "FizzBuzz" . PHP_EOL;
                    break;

                case ($i % 5):
                    echo "Buzz" . PHP_EOL;
                    break;

                case ($i % 3):
                    echo "Fizz" . PHP_EOL;
                    break;

                default:
                    echo $i . PHP_EOL;
                    break;
            }
        }
    }
}
