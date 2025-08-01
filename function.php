<?php
class Calculator
{
    private float $number1;
    private float $number2;
    private string $operator;
    public string $result;

    public function __construct() {
        $this->number1 = (float)$_POST["number1"] ?? 0;
        $this->number2 = (float)$_POST["number2"] ?? 0;
        $this->operator = $_POST["operator"] ?? 'add';
        $this->result = '';
    }

    public function calculate():void
    {
        if(!is_numeric($this->number1) || !is_numeric($this->number2)){
            $this->result = 'Invalid Input';
            return;
        }

        $this->result = match ($this->operator) {
            'add' => $this->number1 + $this->number2,
            'sub' => $this->number1 - $this->number2,
            'multi' => $this->number1 * $this->number2,
            'div' => ($this->number2 == 0)
                ? 'Cannot divide by zero'
                : $this->number1 / $this->number2,
            default => 'Invalid Operator',
        };
    }

    public function getResult():string{
        return (string)$this->result;
    }


}
