<?php declare(strict_type=1);

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