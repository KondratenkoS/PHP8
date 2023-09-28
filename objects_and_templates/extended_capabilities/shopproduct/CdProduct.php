<?php
namespace ShopProduct;
use ShopProduct\ShopProduct;

class Cdproduct extends ShopProduct
{
   public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        int | float $price,
        private int $playLength
   )
   {
        parent::__construct($title, $firstName, $mainName, $price);
   }

   public function getPlayLength(): int
   {
        return $this->playLength;
   }

   public function getSummaryLine(): string
   {
    return parent::getSummaryLine()
            . "Время звучания - {$this->playLength}";
   }
}