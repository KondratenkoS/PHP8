<?php

	class Cart{
		private $products = [];
		
		public function getProducts(){
			return $this->products;
		}
		
		public function add($product){
			$this->products[] = $product;
		}
		
		public function remove($name){
			foreach($this->products as $key => $value){
				if($value->getName() === $name){ 
					unset($this->products[$key]); 
					//print_r($this->products);
					//print_r($key);
				}
			}
		}
		
		public function getTotalCost(){
			$cost = 0;
			
			foreach ($this->products as $product) {
				$cost += $product->getCost();
			}
			
			return $cost;
		}
		
		public function getTotalQuantity(){
			$quantity = 0;
			
			foreach ($this->products as $product) {
				$quantity += $product->getQuantity();
			}
			
			return $quantity;
		}
		
		public function getAvgPrice(){
			return $this->getTotalCost() / $this->getTotalQuantity();
		}
	}