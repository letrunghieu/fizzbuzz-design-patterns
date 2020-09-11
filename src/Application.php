<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz;

class Application
{
    public function run() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0) {
                echo "Fizz" . PHP_EOL;
                continue;
            }

            if ($i % 3 == 0) {
                echo "Fizz" . PHP_EOL;
                continue;
            }

            if ($i % 3 == 0) {
                echo "Fizz" . PHP_EOL;
                continue;
            }


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