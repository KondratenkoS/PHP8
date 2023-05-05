<?php
	/*
		Даны подстроки, разделенные на две части произвольным количеством пар $@:
		$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
		Найдите каждую из таких подстрок и для каждой найденной подстроки
		положите в первый карман то, что стоит до разделителя, а во второй 
		карман - то, что стоит после разделителя.
	*/
	$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
	$reg = '/(a+)(?:[\$\@]+)(b+)/';
	preg_match_all($reg, $str, $res);
	var_dump($res);