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
	echo file_get_contents('../../../dir1/dir2/dir3/test.txt');