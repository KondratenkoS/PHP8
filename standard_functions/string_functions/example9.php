<?php
	/* #9 Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово
		'html', слово 'css' и слово 'php'.
	*/
	echo substr('html css php', 0, 4) . ', ' . substr('html css php', 4, -4) . ', '
		 . substr('html css php', 9) . '<br><br>';
	