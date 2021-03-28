<?php

declare(strict_types=1);

namespace App;

final class Fibonacci
{
    public static function f(int $n): int
    {
        if (0 == $n) {
            return 0;
        }

        return 1;
    }
}
