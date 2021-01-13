<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Bridges\ValueIterators;

use HieuLe\FizzBuzz\Bridges\Mock\Api\CountingApi;
use HieuLe\FizzBuzz\Bridges\Value;

class ExternalValueIterator implements ValueIteratorInterface
{
    private int $min;
    private int $max;
    private int $currentValue;
    private CountingApi $api;
    private array $unreadItems;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
        $this->currentValue = $this->min;
        $this->api = new CountingApi();
        $this->unreadItems = [];
    }

    public function hasNext(): bool
    {
        return $this->currentValue <= $this->max;
    }

    public function next(): void
    {
        if (count($this->unreadItems) === 0) {
            $apiResults = $this->api->fetch($this->currentValue);

            $this->unreadItems = $apiResults['results'];
        }

        $this->currentValue = array_shift($this->unreadItems);
    }

    public function current(): Value
    {
        return new Value($this->currentValue);
    }
}
