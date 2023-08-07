<?php
require_once '../Input/Input.php';
require_once '../Form/Form.php';
require_once '../Submit/Submit.php';
require_once 'Checkbox.php';

	$form = (new Form)->setAttrs([
		'action' => '',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Checkbox)->setAttr('name', 'checkbox');
		echo (new Input)->setAttr('name', 'user');
		echo new Submit;
	echo $form->close();