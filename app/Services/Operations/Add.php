<?php

namespace App\Services\Operations;

class Add implements OperationInterface
{
    protected const VALUE = 10;

    /**
     * Makes calculation
     * @param int $value
     * @return int
     */
    public function calc(int $value): int
    {
        return $value + self::VALUE;
    }
}
