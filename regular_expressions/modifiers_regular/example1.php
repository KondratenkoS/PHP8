<?php
	/*
		Упростите следующий код, использовав соответствующий модификатор:
		preg_replace('#[a-zA-Z]+#', '!', 'aaa BBB');
	*/
	echo preg_replace('#[a-z]+#i', '!', 'aaa BBB');