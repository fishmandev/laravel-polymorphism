<?php

namespace App\Services\Operations;

class Sub implements OperationInterface
{
    protected const VALUE = 40;

    /**
     * Makes calculation
     * @param int $value
     * @return int
     */
    public function calc(int $value): int
    {
        return $value - self::VALUE;
    }
}
