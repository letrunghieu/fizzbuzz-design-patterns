<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Bridges\Writers;

interface WriterInterface
{
    public function writeln(string $input): void;
}
