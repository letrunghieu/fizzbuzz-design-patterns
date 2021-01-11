<?php


namespace HieuLe\FizzBuzz;


class NumberIterator
{
    private int $min;
    private int $max;
    private int $currentValue;

    /**
     * NumberIterator constructor.
     * @param int $min
     * @param int $max
     * @param int $currentValue
     */
    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
        $this->currentValue = $this->min;
    }


    public function hasNext(): bool {
        return $this->currentValue <= $this->max;
    }

    public function current(): int {
        return $this->currentValue;
    }

    public function next(): void {
        $this->currentValue++;
    }
}
