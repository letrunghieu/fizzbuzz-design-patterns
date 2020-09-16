<?php


namespace HieuLe\FizzBuzz\Strategies;


class FizzBuzzStrategy implements StrategyInterface
{
    private int $fizzNumber;
    private int $buzzNumber;

    /**
     * FizzBuzzStrategy constructor.
     * @param int $fizzNumber
     * @param int $buzzNumber
     */
    public function __construct(int $fizzNumber, int $buzzNumber)
    {
        $this->fizzNumber = $fizzNumber;
        $this->buzzNumber = $buzzNumber;
    }


    public function canApplicable(int $number): bool
    {
        return $number % ($this->fizzNumber * $this->buzzNumber) == 0;
    }

    public function handle(int $number): void
    {
        echo "FizzBuzz" . PHP_EOL;
    }
}
