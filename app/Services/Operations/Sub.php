<?php

namespace App\Services\Operations;

class Sub implements OperationInterface
{
    protected const VALUE = 40;

    protected const OPERATOR = '-';

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
