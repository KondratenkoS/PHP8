<?php
	/*
		Напишите код, который прочитает содержимое текстового файла:
		/script1/
			/script2/
				index.php
		/dir/
			test.txt
	*/
	echo file_get_contents('../../dir/test.txt');