<?php
	/*
		Отправьте с помощью GET-запроса число. Выведите на экран квадрат этого числа.
		Добавить к строке для выполнения GET-запроса: ?par=7
	*/
	echo $_GET['par'] * $_GET['par'];