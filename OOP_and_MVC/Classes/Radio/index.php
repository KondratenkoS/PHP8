<?php
require_once '../Input/Input.php';
require_once '../Form/Form.php';
require_once '../Submit/Submit.php';
require_once 'Radio.php';

	$form = (new Form)->setAttrs([
		'action' => '',
		'method' => 'GET'
	]);
	
	echo $form->open();
		echo (new Radio)->setAttr('name', 'radio');
		echo (new Input)->setAttr('name', 'user');
		echo new Submit;
	echo $form->close();