<?php

namespace HimaMage\InjectableAndNoninjectable\Service;

use HimaMage\InjectableAndNoninjectable\Model\Item;
use HimaMage\InjectableAndNoninjectable\Model\Product;
use HimaMage\InjectableAndNoninjectable\Model\ProductFactory;

class Demand
{
    private Item $item;
    private ProductFactory $productFactory;

    public function __construct(Item $item, ProductFactory $productFactory)
    {
        $this->item = $item;
        $this->productFactory = $productFactory;
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @return Product
     */
    public function getProductFactory(): Product
    {
        $product = $this->productFactory->create();
        $product->setBarCode("this is barcode comming from the Demand");
        return $product;
    }
}
