<?php
require_once 'Helper.php';
	class Country{
		use Helper;
		private $population;
		
		public function getPopulation()
		{
			return $this->population;
		}
	}