<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Observers\Subscribers;

class FizzBuzSubscriber implements SubscriberInterface
{
    private int $fizzNumber;
    private int $buzzNumber;

    public function __construct(int $fizzNumber, int $buzzNumber)
    {
        $this->fizzNumber = $fizzNumber;
        $this->buzzNumber = $buzzNumber;
    }

    function receive(int $value)
    {
        switch (0) {
            case $value % ($this->fizzNumber * $this->buzzNumber):
                echo "FizzBuzz";
                break;

            case $value % $this->fizzNumber:
                echo "Fizz";
                break;

            case $value % $this->buzzNumber:
                echo "Buzz";
                break;

            default:
                echo $value;
                break;
        }
    }
}
