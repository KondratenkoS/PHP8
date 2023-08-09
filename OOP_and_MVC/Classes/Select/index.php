<?php
require_once 'Select.php';
require_once 'Option.php';

	
	echo (new Select)->setAttr('name', 'list')
		->add((new Option())->setText('item1'))
		->add((new Option())->setText('item2'))
		->add((new Option())->setText('item3'))
		->show();