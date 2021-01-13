<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Observers;

use HieuLe\FizzBuzz\Observers\Subscribers\SubscriberInterface;
use HieuLe\FizzBuzz\Runners\RunnerInterface;

class ObserverRunner implements RunnerInterface
{
    /** @var SubscriberInterface[] */
    private array $subscribers;

    /**
     * ObserverRunner constructor.
     * @param SubscriberInterface[] $subscribers
     */
    public function __construct(array $subscribers)
    {
        $this->subscribers = $subscribers;
    }

    public function run(): void
    {
        $publisher = new CountingPublisher();

        foreach ($this->subscribers as $subscriber) {
            $publisher->subscribe($subscriber);
        }

        for ($i = 1; $i <= 100; $i++) {
            $publisher->update($i);
        }
    }
}
