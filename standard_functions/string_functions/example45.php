<?php
	/*	#45
		Дана строка 'html, <b>php</b>, js'. 
		Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.
	*/
	echo htmlspecialchars('html, <b>php</b>, js');