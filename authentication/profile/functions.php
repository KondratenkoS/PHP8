<?php
		function validateLogin($post){
		if(preg_match('/^[a-zA-Z0-9]{4,10}$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateName($post){
		if(preg_match('/[А-Яа-яЁёa-zA-Z]+/', validateData($post))){ 
			return $post;
		}
	}

	function validatePass($post){
		if(preg_match('/^[a-zA-Z0-9]{6,12}$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateEmail($post){
		if(preg_match('/^[A-Za-z0-9]+@[a-z]+.[a-z]+$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateDate($date, $format = 'd-m-Y'){
			$d = DateTime::createFromFormat($format, $date);
			return $d && $d->format($format) == $date;
	}
	
	function validateBornDate($post){
		if(preg_match('/^[\w]{2,}-[\w]{2,}-[\w]{4,}$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateData($post){
		$post = trim($post);
		$post = stripslashes($post);
		$post = strip_tags($post);
		$post = htmlspecialchars($post);
		return $post;
	}