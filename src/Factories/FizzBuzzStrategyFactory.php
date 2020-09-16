<?php


namespace HieuLe\FizzBuzz\Factories;


use HieuLe\FizzBuzz\Strategies\BuzzStrategy;
use HieuLe\FizzBuzz\Strategies\FizzBuzzStrategy;
use HieuLe\FizzBuzz\Strategies\FizzStrategy;

class FizzBuzzStrategyFactory
{
    private int $fizzNumber;
    private int $buzzNumber;

    /**
     * FizzBuzzStrategyFactory constructor.
     * @param int $fizzNumber
     * @param int $buzzNumber
     */
    public function __construct(int $fizzNumber, int $buzzNumber)
    {
        $this->fizzNumber = $fizzNumber;
        $this->buzzNumber = $buzzNumber;
    }


    public function createFizzStrategy(): FizzStrategy
    {
        return new FizzStrategy($this->fizzNumber);
    }

    public function createBuzzStrategy(): BuzzStrategy
    {
        return new BuzzStrategy($this->buzzNumber);
    }

    public function createFizzBuzzStrategy(): FizzBuzzStrategy
    {
        return new FizzBuzzStrategy($this->fizzNumber, $this->buzzNumber);
    }
}
