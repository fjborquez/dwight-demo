<?php

namespace Fjborquez\DwightDemo\Strategies;

use Fjborquez\DwightDemo\Strategies\TaxStrategy;

class ElectronicTaxStrategy extends TaxStrategy
{
    const TAX_RATE = 40.0;

    public function execute(): float
    {
        $product = $this->getProduct(func_get_arg(0));
        return $product->getPrice() * (self::TAX_RATE / 100);
    }
}
