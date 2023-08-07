<?php
require_once '../Password/Password.php';
require_once '../Input/Input.php';
require_once '../Form/Form.php';
require_once '../Submit/Submit.php';
require_once 'Hidden.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
		echo (new Input)->setAttr('name', 'year');
		echo new Submit;
	echo $form->close();