<?php

declare(strict_types=1);

namespace App;

final class Fibonacci
{
    /**
     * Current index in the Fibonacci sequence.
     */
    private int $_current = 0;

    public function next(): int
    {
        $_current = $this->_current++;
        if (0 == $_current) {
            return 0;
        }

        return 1;
    }
}
