<?php

namespace Fjborquez\DwightDemo\Strategies;

use Fjborquez\Dwight\Strategy\Strategy;
use Fjborquez\DwightDemo\Dto\Product;
use RuntimeException;

abstract class TaxStrategy implements Strategy
{
    protected function isProduct(array $params): void {
        if (!$params[0] instanceof Product) {
            throw new RuntimeException('The first parameter must be an instance of Product.');
        }
    }

    protected function getProduct(array $possibleProduct): Product {
        $this->isProduct($possibleProduct);
        return $possibleProduct[0];
    }
}
