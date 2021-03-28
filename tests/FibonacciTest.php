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
    public function testFirstValueIsZero()
    {
        $fibonacci = new Fibonacci();
        $actual = $fibonacci->next();
        $expected = 0;
        $this->assertEquals($expected, $actual);
    }
}
