<?php

	if (!empty($_COOKIE)) {
		echo date('H:i:s', $_COOKIE['time']);
	} else {
		setcookie('time', time(), time() + 3600, '/');
		echo 'cookie saved';
	}