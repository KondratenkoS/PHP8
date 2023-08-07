<?php
require_once 'Password.php';
require_once '../Input/Input.php';
require_once '../Form/Form.php';
require_once '../Submit/Submit.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Input)   ->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo new Submit;
	echo $form->close();