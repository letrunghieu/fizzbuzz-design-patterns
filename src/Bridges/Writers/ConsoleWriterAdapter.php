<?php declare(strict_types=1);

namespace HieuLe\FizzBuzz\Bridges\Writers;

use Symfony\Component\Console\Output\ConsoleOutput;

class ConsoleWriterAdapter implements WriterInterface
{
    private ConsoleOutput $consoleOutput;

    public function __construct(ConsoleOutput $consoleOutput)
    {
        $this->consoleOutput = $consoleOutput;
    }

    public function writeln(string $input): void
    {
        $this->consoleOutput->writeln($input);
    }
}
