<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\StepHandlers;

class DefaultStepHandler implements StepHandlerInterface
{
    /**
     * @var StepHandlerStrategyInterface[]
     */
    private array $strategies;

    /**
     * DefaultStepHandler constructor.
     * @param StepHandlerStrategyInterface[] $strategies
     */
    public function __construct(array $strategies)
    {
        $this->strategies = $strategies;
    }

    public function handle(int $number): void
    {
        foreach ($this->strategies as $handlerStrategy) {
            if ($handlerStrategy->canSatisfy($number)) {
                $handlerStrategy->handle($number);
                return;
            }
        }
    }
}
