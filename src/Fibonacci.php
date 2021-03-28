<?php

declare(strict_types=1);

namespace App;

final class Fibonacci
{
    /**
     * Current index in the Fibonacci sequence.
     */
    private int $_i = 0;

    public function next(): int
    {
        $i = $this->_i++;
        return $this->_f($i);
    }

    private function _f(int $i): int
    {
        if (0 == $i) {
            return 0;
        } else if (1 == $i) {
            return 1;
        } else {
            return $this->_f($i - 2) + $this->_f($i - 1);
        }
    }
}
