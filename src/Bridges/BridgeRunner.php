<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Bridges;

use HieuLe\FizzBuzz\Bridges\ValueIterators\ValueIteratorInterface;
use HieuLe\FizzBuzz\Bridges\Writers\WriterInterface;

class BridgeRunner
{
    private const FIZZ_NUMBER = 3;
    private const BUZZ_NUMBER = 5;

    private ValueIteratorInterface $iterator;

    private WriterInterface $writer;

    /**
     * BridgeRunner constructor.
     * @param ValueIteratorInterface $iterator
     * @param WriterInterface $writer
     */
    public function __construct(ValueIteratorInterface $iterator, WriterInterface $writer)
    {
        $this->iterator = $iterator;
        $this->writer = $writer;
    }

    public function run()
    {
        while ($this->iterator->hasNext()) {
            $value = $this->iterator->current();
            $this->writer->writeln($this->getOutputString($value));
            $this->iterator->next();
        }
    }

    private function getOutputString(Value $value): string
    {
        switch (0) {
            case $value->getRawValue() % (self::FIZZ_NUMBER * self::BUZZ_NUMBER):
                return "FizzBuzz";

            case $value->getRawValue() % self::FIZZ_NUMBER:
                return "Fizz";

            case $value->getRawValue() % self::BUZZ_NUMBER:
                return "Buzz";

            default:
                return "{$value->getRawValue()}";
        }
    }
}
