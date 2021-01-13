<?php declare(strict_types = 1);

namespace HieuLe\FizzBuzzTest;

use HieuLe\FizzBuzz\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * @dataProvider provideApplicationData
     */
    public function testApplicationOutput(string $pattern): void
    {
        $_SERVER['argv'][1] = $pattern;

        $application = new Application();
        ob_start();
        $application->run();
        $output = ob_get_clean();

        $this->assertEquals(
            $this->getExpectedOutput(),
            $output
        );
    }

    public function provideApplicationData(): array
    {
        return [
            'Visitor' => ['visitor'],
            'Observer' => ['observer'],
            'Bridge (with simple implementations)' => ['simple-bridge'],
        ];
    }

    private function getExpectedOutput(): string
    {
        return file_get_contents(__DIR__ . "/data/output100.txt");
    }
}
