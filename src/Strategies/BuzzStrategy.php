<?php


namespace HieuLe\FizzBuzz\Strategies;


class BuzzStrategy implements StrategyInterface
{

    private $division;

    /**
     * BuzzStrategy constructor.
     * @param $division
     */
    public function __construct($division)
    {
        $this->division = $division;
    }


    public function canApplicable(int $number): bool
    {
        $this->division = $number % 5 == 0;
        return $this->division;
    }

    public function handle(int $number): void
    {
        echo "Buzz" . PHP_EOL;
    }
}
