<?php
require_once 'Files.php';
	$filePath = 'Test/Test.php';
	$copyPath = 'Test/CopyTest.php';
	$text = 'Hello world! ';
	$appendText = 'Some text!';
	$newName = 'Test/RenamedTest.php';
	$newPath = 'Test2/Test.php';
	
	$file = new Files($filePath);
	$file->setText($text);
	$file->appendText($appendText);
	$file->copy($copyPath);
	//$file->replace($newPath);
	//$file->rename($newName);
	//$file->delete();
	
	echo 'Имя папки ' . $file->getDir() . '<br>';
	echo 'Имя файла ' . $file->getName() . '<br>';
	echo 'Расширение файла - ' . $file->getExt() . '<br>';
	echo 'Размер файла - ' . $file->getSize() . ' байтов' . '<br>';
	echo 'Текст файла - ' . $file->getText() . '<br>';

	