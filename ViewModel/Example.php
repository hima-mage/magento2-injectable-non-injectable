<?php

namespace HimaMage\InjectableAndNoninjectable\ViewModel;

use HimaMage\InjectableAndNoninjectable\Service\Demand;
use HimaMage\InjectableAndNoninjectable\Service\Supplier;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements  ArgumentInterface
{
    private Supplier $supplier;
    private Demand $demand;

    public function __construct(Supplier $supplier , Demand $demand)
    {
        $this->supplier = $supplier;
        $this->demand = $demand;
    }

    /**
     * @return Supplier
     */
    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }

    /**
     * @return Demand
     */
    public function getDemand(): Demand
    {
        return $this->demand;
    }
}
