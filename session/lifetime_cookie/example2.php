<?php
	/*
		Установите какую-нибудь куку на год.
	*/
	setcookie('test', 'abcde', time() + 60 * 60 * 24 * 365);