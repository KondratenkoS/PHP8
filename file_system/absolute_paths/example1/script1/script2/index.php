<?php
	/*
		Напишите код, который прочитает содержимое текстового файла:
		/script1/
			/script2/
				index.php
		/dir/
			test.txt
	*/

	$path = $_SERVER['DOCUMENT_ROOT'] . '/php8/file_system/absolute_paths/example1/';
	echo file_get_contents($path . 'dir/text.txt');