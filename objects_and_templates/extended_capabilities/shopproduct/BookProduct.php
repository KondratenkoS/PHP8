<?php
namespace ShopProduct;
use ShopProduct\ShopProduct;

class BookProduct extends ShopProduct
{
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        int | float $price,
        private int $numPages
    )
    {
        parent::__construct($title, $firstName, $mainName, $price);
    }

    public function getNumPages(): int
    {
        return $this->numPages;
    }

    public function getPrice(): int | float
    {
        return parent::getPrice();
    }

    public function getSummaryLine(): string
    {
        return parent::getSummaryLine()
               . ": - {$this->numPages} стр.";
    }
}