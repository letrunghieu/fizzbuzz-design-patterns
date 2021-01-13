<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Bridges\Mock\Api;

class CountingApi
{
    private const LIMIT = 30;

    public function fetch(int $from): array
    {
        sleep(rand(1, 3));
        return [
            'results' => range($from + 1, $from + self::LIMIT)
        ];
    }
}
