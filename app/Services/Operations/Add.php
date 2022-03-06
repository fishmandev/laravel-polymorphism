<?php

namespace App\Services\Operations;

class Add implements OperationInterface
{
    protected const VALUE = 10;

    protected const OPERATOR = '+';

    /**
     * Returns value
     * @return int
     */
    public function getValue(): int
    {
        return self::VALUE;
    }

    /**
     * Returns operator
     * @return string
     */
    public function getOperator(): string
    {
        return self::OPERATOR;
    }
}
