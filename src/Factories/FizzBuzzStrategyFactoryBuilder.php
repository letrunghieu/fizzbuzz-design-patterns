<?php


namespace HieuLe\FizzBuzz\Factories;


class FizzBuzzStrategyFactoryBuilder
{
    private int $fizzNumber = 3;
    private int $buzzNumber = 5;

    private static self $instance;
    public static function getInstance() :FizzBuzzStrategyFactoryBuilder {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param int $fizzNumber
     * @return FizzBuzzStrategyFactoryBuilder
     */
    public function setFizzNumber(int $fizzNumber): FizzBuzzStrategyFactoryBuilder
    {
        $this->fizzNumber = $fizzNumber;
        return $this;
    }

    /**
     * @param int $buzzNumber
     * @return FizzBuzzStrategyFactoryBuilder
     */
    public function setBuzzNumber(int $buzzNumber): FizzBuzzStrategyFactoryBuilder
    {
        $this->buzzNumber = $buzzNumber;
        return $this;
    }



    public function build(): FizzBuzzStrategyFactory {
        return new FizzBuzzStrategyFactory(
            $this->fizzNumber,
            $this->buzzNumber
        );
    }
}
