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
    public function testFibonacci()
    {
        $this->assertEquals(0, Fibonacci::f(0));
        $this->assertEquals(1, Fibonacci::f(1));
    }
}
