<?php
require_once '../Tag/Tag.php';

	class Textarea extends Tag
	{
		public function __construct()
		{
			parent::__construct('textarea');
		}
		
		public function open()
		{
			$inputName = $this->getAttr('name');
			
			// Если атрибут name задан у инпута:
			if ($inputName) {
				if (isset($_REQUEST[$inputName])) {
					$value = $_REQUEST[$inputName];
					$this->setText($value);
				}
			}
			
			return parent::open();
		}
		
		public function __toString()
		{
			return $this->open();
		}
	}