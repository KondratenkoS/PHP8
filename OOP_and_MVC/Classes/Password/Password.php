<?php
require_once '../Input/Input.php';

	class Password extends Input{
		public function __construct(){
			parent::__construct();
			$this->setAttr('type', 'password');
		}
	}