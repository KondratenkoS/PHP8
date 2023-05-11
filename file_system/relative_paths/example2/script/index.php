<?php
	/*
		Напишите код, который прочитает содержимое текстового файла:
		/script/
			index.php
		/dir1/
			/dir2/
				test.txt
	*/
	echo file_get_contents('../dir1/dir2/test.txt');