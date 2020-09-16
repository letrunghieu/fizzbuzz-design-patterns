<?php


namespace HieuLe\FizzBuzz\Strategies;


class FizzStrategy implements StrategyInterface
{

    private $division;

    /**
     * FizzStrategy constructor.
     * @param $division
     */
    public function __construct($division)
    {
        $this->division = $division;
    }


    public function canApplicable(int $number): bool
    {
        $this->division = 3;
        return $number % $this->division == 0;
    }

    public function handle(int $number): void
    {
        echo "Fizz" . PHP_EOL;
    }
}
