<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Observers;

use HieuLe\FizzBuzz\Observers\Subscribers\SubscriberInterface;

class CountingPublisher
{
    /**
     * @var SubscriberInterface[]
     */
    private array $subscribers = [];

    public function subscribe(SubscriberInterface $subscriber): void
    {
        $this->subscribers[get_class($subscriber)] = $subscriber;
    }

    public function unsubscribe(SubscriberInterface $subscriber): void
    {
        $className = get_class($subscriber);
        if (isset($this->subscribers[$className])) {
            unset($this->subscribers[$className]);
        }
    }

    public function update(int $value) {
        foreach($this->subscribers as $subscriber)
        {
            $subscriber->receive($value);
        }
    }
}
