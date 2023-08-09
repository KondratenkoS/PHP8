<?php
require_once 'CookieShell.php';
    
    $counter = new CookieShell;
    if(!$counter->existsCookie('counter')){
        $counter->setCookie('counter', 1, time() + 3600);
        $_COOKIE['counter'] = 1;
    } else {
        $counter->setCookie('counter', ++$_COOKIE['counter'],time() + 3600);
    }
    
	echo $counter->getCookie('counter');