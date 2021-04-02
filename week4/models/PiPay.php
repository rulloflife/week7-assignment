<?php

require_once(__DIR__ . '/../interface/IBank.php');

class PiPay implements IBank
{
    public function __construct(
        protected string $Items,
        protected float $Prices,
        protected int $Quantity       
    ) {}

    public function getItems()
    {
        return 'Item ' . $this->Items;
    }
    public function getPrice()
    {
        return $this->Prices;
    }
    public function getQuantity()
    {
        return $this->Quantity;
    }
    public function getType()
    {
        return 'PiPay';
    }
    public function getNumTotal()
    {
        return $this->Prices * $this->Quantity;
    }
}