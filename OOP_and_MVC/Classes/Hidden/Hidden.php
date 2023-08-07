<?php
require_once '../Input/Input.php';

	class Hidden extends Input{
		public function __construct(){
			parent::__construct();
			$this->setAttr('type', 'hidden');
		}
	}