<?php
require_once '../Tag/Tag.php';

	class HtmlList extends Tag{
		private $items = [];
		
		public function addItem(ListItem $li){
			$this->items[] = $li;
			return $this;
		}
		
		public function show(){
			$result = $this->open();
			
			foreach($this->items as $item){
				$result .= $item->show();
			}
			
			$result .= $this->close();
			return $result;
		}
	}
	