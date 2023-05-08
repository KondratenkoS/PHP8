<?php
	/*
		Упростите следующий код:
		$arr = ['a' => 1, 'b' => 2, 'c' => 3];

		foreach ($arr as $key => $elem) {
			echo 'pair: ' . $elem . ' ' . $key . '<br>';
		}
	*/
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];

	foreach ($arr as $key => $elem) {
		echo "pair: $elem $key<br>";
	}