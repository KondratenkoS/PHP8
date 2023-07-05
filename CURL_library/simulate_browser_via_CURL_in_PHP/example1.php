<?php
	/*
		Обратитесь через CURL к следующему сайту, работающему на HTTPS:
		$url = 'https://code.mu';
	*/
	
	$url = 'https://code.mu';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)');
	
	curl_exec($curl);