<?php declare(strict_types=1);

namespace HieuLe\FizzBuzzTest;

use HieuLe\FizzBuzz\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testApplicationOutput(): void
    {
        $application = new Application();
        ob_start();
        $application->run();
        $output = ob_get_clean();

        $this->assertEquals(
            $this->getExpectedOutput(),
            $output
        );
    }

    private function getExpectedOutput(): string
    {
        return file_get_contents(__DIR__ . "/data/output100.txt");
    }
}
