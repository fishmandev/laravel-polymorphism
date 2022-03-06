<?php

namespace App\Services\Operations;

interface OperationInterface
{
    /**
     * Makes calculation
     * @param int $value
     * @return int
     */
    public function calc(int $value): int;
}
