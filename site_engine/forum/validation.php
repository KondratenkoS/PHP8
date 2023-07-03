<?php
	session_start();

		function validateData($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = strip_tags($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		function validateLogin($login){
			if(preg_match('/^.*[A-Za-z0-9]{4,10}.*$/', validateData($login))){
				return $login;
			} else {
				$_SESSION['errorLogin'] = "Логин должен быть латинскими буквами, и длинной от 4-x до 10-ти символов.";
				$_SESSION['login'] = $login;
			}
		}

		function validateName($name){
			if(preg_match("/([^s]+)s+([^s.])[^s.]*(?:s|.)([^s.])[^s.]*/", strtolower(validateData($name)))){ 
				$_SESSION['errorName'] = "Ошибка ввода Ф.И.О.";
				$_SESSION['name'] = $name;
			} else {
				return $name;
			}
		}
		
		function validateEmail($email){
		if(preg_match('/^[A-Za-z0-9]+@[a-z]+.[a-z]+$/', validateData($email))){ 
			return $email;
		} else {
				$_SESSION['errorEmail'] = "Email введён не корректно";
				$_SESSION['email'] = $email;
			}
		}
		
		function validatePass($pass){
			if(preg_match('/^[a-zA-Z0-9]{4,12}$/', validateData($pass))){ 
				return $pass;
			}
		}