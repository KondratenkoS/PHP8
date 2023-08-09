<?php
    class CookieShell{
        public function setCookie($name, $value, $time){
            setcookie($name, $value, $time);
	        $_COOKIE['name'] = $value;
        }

        public function getCookie($name){
            return $_COOKIE['name'];
        }

        public function delCookie($name){
            if (isset($_COOKIE[$name])) {
                setcookie($name, '', time());
                unset($_COOKIE[$name]);
            }
        }

        public function existsCookie($name){
            if(isset($_COOKIE[$name])){
                return true;
            }
        }
    }