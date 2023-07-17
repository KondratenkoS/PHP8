<?php
	/*
		По ссылке находится API, отдающее "да" или "нет" в виде картинке. 
		Реализуйте на основе этого API сайт, рандомно отвечающий на вопросы пользователя.
	*/
	session_start();
		$url = 'https://yesno.wtf/api';
	
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$res = curl_exec($curl);
		$array = json_decode($res, true);
		//var_dump($array['image']);

		if(!empty($_POST['yes']) and $_POST['yes'] === 'yes'){
			$reg = '#\/no\/#';
			$str = preg_replace($reg, '/yes/', $array['image']);
			
			$_SESSION['image'] = $str;
			header('Location: index.php');
		}

		if(!empty($_POST['no']) and $_POST['no'] === 'no'){
			$reg = '#\/yes\/#';
			$str = preg_replace($reg, '/no/', $array['image']);
			
			$_SESSION['image'] = $str;
			header('Location: index.php');
		}
