<?php
	$url = $_SERVER['REQUEST_URI'];
	echo $url;
	
	$layout = file_get_contents('layout.php');
	$content = file_get_contents('view' . $url . '.php');
	$layout = str_replace('{{ content }}', $content, $layout);
	
	echo $layout;