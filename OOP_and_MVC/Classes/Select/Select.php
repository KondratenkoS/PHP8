<?php
require_once '../Tag/Tag.php';
require_once 'Option.php';

	class Select extends Tag
	{
		private $items = [];
		
		public function __construct(){
			parent::__construct('select');
		}
		
		public function add(Option $opt)
		{
			$this->items[] = $opt;
			return $this;
		}
		
		public function show()
		{
			$result = $this->open();
			
			foreach ($this->items as $item) {
				$result .= $item->show();
			}
			
			$result .= $this->close();
			
			return $result;
		}
	}