<?php
	require_once '../connection/connection.php';
	$url = 'rubric_selection';//$_SERVER['REQUEST_URI'];
		echo $url;
	$titles = require 'titles/titles.php';
	$title = $titles[$url];
		
	$layout = file_get_contents('layout.php');
	$content = file_get_contents($url . '.php');
	
	$layout = str_replace('{{ title }}', $title, $layout);
	$layout = str_replace('{{ content }}', $content, $layout);
	echo $layout;