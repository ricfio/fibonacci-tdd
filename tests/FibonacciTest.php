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
    private $fibonacci;

    protected function setUp(): void
    {
        $this->fibonacci = new Fibonacci();
    }

    public function testThe1stFibonacciNumberIsZero()
    {
        $actual = $this->fibonacci->next();
        $this->assertSame(0, $actual);
    }

    public function testThe2ndFibonacciNumberIsOne()
    {
        $actual = $this->fibonacci->next();
        $actual = $this->fibonacci->next();
        $this->assertSame(1, $actual);
    }

    public function testThe3rdFibonacciNumberIsOne()
    {
        $actual = $this->fibonacci->next();
        $actual = $this->fibonacci->next();
        $actual = $this->fibonacci->next();
        $this->assertSame(1, $actual);
    }

    /**
     * @dataProvider fibonacciSequence
     */
    public function testFibonacciSequenceIsCorrect(int $key, int $expected)
    {
        for ($i=0; $i <= $key; $i++) { 
            $actual = $this->fibonacci->next();
        }
        $this->assertSame($expected, $actual);
    }

    public function fibonacciSequence(): array
    {
        $data = [];
        $list = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144];
        foreach ($list as $key => $number) {
            $data[] = [$key, $number];
        }

        return $data;
    }
}
