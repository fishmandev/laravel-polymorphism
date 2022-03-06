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
     * @return void
     * @throws Exception
     */
    protected function calc()
    {
        foreach ($this->operations as $operation) {
            switch ($operation->getOperator()) {
                case '+':
                    $this->value += $operation->getValue();
                    break;
                case '-':
                    $this->value -= $operation->getValue();
                    break;
                default:
                    throw new Exception(sprintf("Operation '%s' has not implemented", $operation->getOperator()));
            }
        }
    }

    /**
     * @return int
     * @throws Exception
     */
    public function getResult(): int
    {
        $this->calc();
        return $this->value;
    }
}
