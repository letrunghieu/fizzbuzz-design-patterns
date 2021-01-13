<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Observers\Subscribers;

class NewLineSubscriber implements SubscriberInterface
{
    function receive(int $value)
    {
        echo PHP_EOL;
    }
}
