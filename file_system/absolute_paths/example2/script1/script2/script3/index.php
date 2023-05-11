<?php
	/*
		Напишите код, который прочитает содержимое текстового файла:
		/script1/
			/script2/
				/script3/
					index.php
		/dir1/
			/dir2/
				/dir3/
					test.txt
	*/

	$path = $_SERVER['DOCUMENT_ROOT'] . '/php8/file_system/absolute_paths/example2/';
	echo file_get_contents($path . 'dir1/dir2/dir3/text.txt');