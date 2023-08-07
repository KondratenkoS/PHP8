<?php
require_once 'Input.php';
require_once '../Form/Form.php';

	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
	echo $form->open();
		echo (new Input)->setAttrs(['name' => 'num1']) . '<br>';
		echo (new Input)->setAttrs(['name' => 'num2']) . '<br>';
		echo (new Input)->setAttrs(['name' => 'num3']) . '<br>';
		echo (new Input)->setAttrs(['name' => 'num4']) . '<br>';
		echo (new Input)->setAttrs(['name' => 'num5']) . '<br>';
		echo (new Input)->setAttrs(['type' => 'submit']) . '<br>';
	echo $form->close();

	if(!empty($_GET)){
		echo array_sum($_GET);
	}