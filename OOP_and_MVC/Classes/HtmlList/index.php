<?php
require_once 'HtmlList.php';
require_once 'ListItem.php';

	$ul = new HtmlList('ul');
	$ol = new HtmlList('ol');
	
	echo $ul->setAttr('class', 'eee')
		->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show() . '<br>';
	
	echo $ol->setAttr('class', 'eee')
		->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show() . '<br>';