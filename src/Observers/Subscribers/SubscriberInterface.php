<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Observers\Subscribers;

interface SubscriberInterface
{
    function receive(int $value);
}
