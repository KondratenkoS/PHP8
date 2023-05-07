<?php
	/*
		Дана строка с тегом:
		$str = '<a href="" class="eee" id="zzz">';
		Получите массив имен атрибутов этого тега.
	*/
	$str = '<a href="" class="eee" id="zzz">';
	$reg = '/[a-z]+(?=\=)/';
	preg_match_all($reg, $str, $res);
	print_r($res);