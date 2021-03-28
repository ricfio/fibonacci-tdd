<?php

declare(strict_types=1);

use App\Fibonacci;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class FibonacciTest extends TestCase
{
    /**
     * @dataProvider fibonacciProvider
     */
    public function testFibonacci(int $n, int $expected)
    {
        $this->assertEquals($expected, Fibonacci::f($n));
    }

    public function fibonacciProvider(): array
    {
        $data = [];
        $list = [0, 1, 1, 2];
        foreach ($list as $n => $number) {
            $data[] = [$n, $number];
        }

        return $data;
    }
}
