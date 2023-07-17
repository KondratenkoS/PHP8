<?php
	/*
		По ссылке: http://jservice.io/ находится API, отдающее вопросы для викторины.
		Реализуйте на основе этого API сайт-викторину с вопросами.
	*/
		session_start();
		$url = 'http://jservice.io/api/clues';
	
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		$res = curl_exec($curl);
		$array = json_decode($res, true);
		
		if(!empty($_POST['num'])){
			$_SESSION['category'] = $array[$_POST['num']]['category']['title'];
			$_SESSION['question'] = $array[$_POST['num']]['question'];
			$_SESSION['value'] = $array[$_POST['num']]['value'];
			$_SESSION['answer'] = $array[$_POST['num']]['answer'];
			
			header('Location: index.php');
		} else {
			header('Location: index.php');
			die();
		}