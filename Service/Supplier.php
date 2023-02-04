<?php

namespace HimaMage\InjectableAndNoninjectable\Service;

use HimaMage\InjectableAndNoninjectable\Model\Item;
use HimaMage\InjectableAndNoninjectable\Model\Product;
use HimaMage\InjectableAndNoninjectable\Model\ProductFactory;

class Supplier
{
    private Item $item;
    private ProductFactory $productFactory;

    public function __construct(Item $item , ProductFactory $productFactory)
    {
        $this->item = $item;
        $this->productFactory = $productFactory;
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        $this->item->setBarCode('this comming from supplier Class');
        return $this->item;
    }

    /**
     * @return Product
     */
    public function getProductFactory(): Product
    {
        $product =  $this->productFactory->create();
        $product->setBarCode('this is barcode from the supplier');
        return $product;
    }
}
