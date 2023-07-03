<?php
	session_start();
	session_destroy();
	
	header('Location: /php8/site_engine/forum/layout.php');
	die();