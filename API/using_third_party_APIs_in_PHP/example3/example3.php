<?php
	/*
		По ссылке - http://www.boredapi.com/documentation находится API, отдающее идеи, чем заняться, когда скучно.
		Реализуйте на основе этого API сайт предлагающий идеи занятий.
	*/
	session_start();
	
	if(isset($_POST['num'])){
		$url = 'http://www.boredapi.com/api/activity/';
	
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$res = curl_exec($curl);
		$array = json_decode($res, true);
		$_SESSION['activity']	   = $array['activity'];
		$_SESSION['type'] 	 	   = $array['type'];
		$_SESSION['participants']  = $array['participants'];
		$_SESSION['link'] 		   = $array['link'];
		header('Location: index.php');
	}
	
		