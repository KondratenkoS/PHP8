<?php
	/*
		Установите какую-нибудь куку на месяц.
	*/
	setcookie('test', 'abcde', time() + 60 * 60 * 24 * 31);