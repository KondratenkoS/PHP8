<?php
require_once '../Tag/Tag.php';

	class Link extends Tag{
		
		const ADDCLASS = 'link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover';
		
		public function __construct(){
			parent::__construct('a');
			$this->setAttr('href', '');
		}
		
		// Переопределяем метод родителя:
		public function open()
		{
			$this->activateSelf(); // вызываем активацию
			return parent::open(); // вызываем метод родителя
		}
		
		private function activateSelf()
		{
			if ($this->getAttr('href') === $_SERVER['REQUEST_URI']) {
				$this->addClass(self::ADDCLASS);
			}
		}
	}