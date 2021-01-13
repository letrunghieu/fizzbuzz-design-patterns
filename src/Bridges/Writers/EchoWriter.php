<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzz\Bridges\Writers;

class EchoWriter implements WriterInterface
{
    public function writeln(string $input): void
    {
        echo $input . PHP_EOL;
    }
}
