<?php
	/*
		Преобразуйте в JSON следующую структуру PHP:

			$data = [
				'x' => 1,
				'y' => 2,
				'z' => 3,
			];
	*/
	
	$data = [
				'x' => 1,
				'y' => 2,
				'z' => 3,
			];
	
	$encode = json_encode($data);
	var_dump($encode);