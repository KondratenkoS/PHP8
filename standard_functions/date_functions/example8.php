<?php
	/* #8
		С помощью функций mktime и date выведите 
		12 февраля 2025 года в формате 12.02.2025.
	*/
	echo date('d.m.Y', mktime(0, 0, 0, 02, 12, 2025));