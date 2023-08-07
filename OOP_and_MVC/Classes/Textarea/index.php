<?php
require_once '../Password/Password.php';
require_once '../Input/Input.php';
require_once '../Form/Form.php';
require_once '../Submit/Submit.php';
require_once 'Textarea.php';

	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
	echo $form->open();
		echo (new Input)->setAttr('name', 'user') . '<br>';
		echo (new Textarea)->setAttr('name', 'message')->show() . '<br>';
		echo new Submit . '<br>';
	echo $form->close();
