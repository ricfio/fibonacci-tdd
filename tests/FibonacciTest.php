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
    private static $fibonacci;

    public static function setUpBeforeClass(): void
    {
        self::$fibonacci = new Fibonacci();
    }

    public function testThe1stFibonacciNumberIsZero()
    {
        $actual = self::$fibonacci->next();
        $this->assertSame(0, $actual);
    }

    public function testThe2ndFibonacciNumberIsOne()
    {
        $actual = self::$fibonacci->next();
        $this->assertSame(1, $actual);
    }

    public function testThe3rdFibonacciNumberIsOne()
    {
        $actual = self::$fibonacci->next();
        $this->assertSame(1, $actual);
    }
}
