<?php
	/*
		Сделайте у себя на локалке сайт test.loc. Обратитесь к нему через CURL.
	*/
	
	$url = 'http://localhost/php8/CURL_library/curl_init/test.loc';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	
	curl_exec($curl);