<?php
spl_autoload_register();

   use \ShopProduct\ShopProduct;
   use \ShopProduct\ShopProductWriter;
   use \ShopProduct\Cdproduct;
   use \ShopProduct\BookProduct;
   use \StaticExample\StaticExample;
   use \StaticExample\StaticExample2;

   $prodclass = new \ReflectionClass(ShopProduct::class);
   print_r($prodclass);



