<?php

namespace App\Services\Operations;

interface OperationInterface
{
    /**
     * Returns value
     * @return int
     */
    public function getValue(): int;

    /**
     * Returns operator
     * @return string
     */
    public function getOperator(): string;
}
