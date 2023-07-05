<?php

	if (!empty($_COOKIE)) {
		echo json_encode($_COOKIE);
	} else {
		echo 'errorHell';
	}