<?php
    require_once '../vendor/autoload.php';

    use Fjborquez\DwightDemo\Dto\Product;
    use Fjborquez\DwightDemo\Strategies\FoodTaxStrategy;
    use Fjborquez\DwightDemo\Strategies\TaxFreeStrategy;
    use Fjborquez\DwightDemo\Strategies\ElectronicTaxStrategy;
    use Fjborquez\Dwight\Strategy\Context;

    $product = new Product;
    $product->setName('Product Test')
        ->setCategory('electronics')
        ->setPrice(100);
    
    switch ($product->getCategory()) {
        case 'electronics':
            $strategy = new ElectronicTaxStrategy;
            break;
        case 'food':
            $strategy = new FoodTaxStrategy;
            break;
        case 'books':
            $strategy = new TaxFreeStrategy;
            break;
        default:
            throw new \Exception('Strategy not found for this category.');
    }
    
    $context = new Context();
    $context->setStrategy($strategy);
    $returned = $context->execute($product);
    
    echo $returned;
