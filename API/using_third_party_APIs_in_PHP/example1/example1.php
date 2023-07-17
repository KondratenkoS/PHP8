<?php
	/*
		По ссылке - http://numbersapi.com/#42 находится API, отдающее интересную информацию о числах.
		Реализуйте на основе этого API сайт, выдающий информацию о числах.
	*/
	if(!empty($_POST['num'])){
		$num = $_POST['num'];
		
		$url = 'http://numbersapi.com/'.$num;
	
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$res = curl_exec($curl);
		header('Location: index.php?res='.$res);
		die();
	} else {
		header('Location: index.php');
		die();
	}
	
	