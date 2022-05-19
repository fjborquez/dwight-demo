<?php

namespace Fjborquez\DwightDemo\Strategies;

use Fjborquez\DwightDemo\Strategies\TaxStrategy;

class TaxFreeStrategy extends TaxStrategy
{
    public function execute(): float
    {
        return 0;
    }
}
