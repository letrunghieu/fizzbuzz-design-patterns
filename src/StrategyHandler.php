<?php


namespace HieuLe\FizzBuzz;


use HieuLe\FizzBuzz\Strategies\StrategyInterface;

class StrategyHandler
{
    /**
     * @var StrategyInterface[]
     */
    private array $strategies;

    /**
     * StrategyHandler constructor.
     * @param StrategyInterface[] $strategies
     */
    public function __construct(array $strategies)
    {
        $this->strategies = $strategies;
    }


    public function handle(int $number): void
    {
        foreach ($this->strategies as $strategy) {
            if ($strategy->canApplicable($number)) {
                $strategy->handle($number);
                return;
            }
        }
    }
}
