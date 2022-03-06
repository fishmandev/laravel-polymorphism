<?php

namespace App\Services;

use App\Services\Operations\OperationInterface;
use Exception;

class Calculator
{
    protected array $operations = [];

    protected int $value = 100;

    /**
     * @param OperationInterface ...$operations
     */
    public function __construct(OperationInterface ...$operations)
    {
        $this->operations = $operations;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function getResult(): int
    {
        foreach ($this->operations as $operation) {
            $this->value = $operation->calc($this->value);
        }

        return $this->value;
    }
}
