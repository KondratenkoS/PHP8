<?php

    class SessionShell{
        public function __construct()
        {
            if(!isset($_SESSION)){
                session_start();
            }
        }

        public function setSession($name, $value){
            $_SESSION[$name] = $value;
        }

        public function getSession($name){
            return $_SESSION[$name];
        }

        public function delSession($name){
            unset($_SESSION[$name]);
        }

        public function existsSession($name){
            if(isset($_SESSION[$name])){
                return true;
            }
        }

        public function destroy(){
            session_destroy();
        }
    }