<?php

declare(strict_types=1);

namespace App;

final class Fibonacci
{
    public static function f(int $n): int
    {
        switch ($n) {
            case 0:
                return 0;

            case 1:
                return 1;

            default:
                return self::f($n - 1) + self::f($n - 2);
        }
    }
}
