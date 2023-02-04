<?php

namespace HimaMage\InjectableAndNoninjectable\Model;

class Product
{
    protected string $barCode;

    /**
     * @return string
     */
    public function getBarCode(): string
    {
        return $this->barCode;
    }

    /**
     * @param string $barCode
     */
    public function setBarCode(string $barCode): void
    {
        $this->barCode = $barCode;
    }
}
