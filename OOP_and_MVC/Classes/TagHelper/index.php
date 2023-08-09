<?php
require_once 'TagHelper.php';

$th = new TagHelper();

echo $th->show('h1', 'asdasd asdasd a');
	
echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']);
	echo $th->open('input', ['name' => 'year']);
	echo $th->open('input', ['type' => 'submit']);
echo $th->close('form');