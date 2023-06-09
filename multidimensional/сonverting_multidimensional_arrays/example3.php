<?php
	/*
		Дан список событий за определенные даты, хранящийся в следующей структуре.
		
		Напишите код, которой переделает структуру данных вот в такую:

		[
			[
				'date'  => '2019-12-29',
				'event' => 'name1'
			],
			[
				'date'  => '2019-12-29',
				'event' => 'name2'
			],
			[
				'date'  => '2019-12-29',
				'event' => 'name3'
			],
			[
				'date'  => '2019-12-29',
				'event' => 'name4'
			],
			[
				'date'  => '2019-12-30',
				'event' => 'name5'
			],
			[
				'date'  => '2019-12-30',
				'event' => 'name6'
			],
			[
				'date'  => '2019-12-30',
				'event' => 'name7'
			],
			[
				'date'  => '2019-12-31',
				'event' => 'name8'
			],
			[
				'date'  => '2019-12-31',
				'event' => 'name9'
			],
		]
	*/
	
	$arr = [
			'2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
			'2019-12-30'=> ['name5', 'name6', 'name7'],
			'2019-12-31'=> ['name8', 'name9'],
			];
			
	$result = [];
	foreach($arr as $date => $elem){
		foreach($elem as $event){
			$result[] = ['date' => $date,
						 'event' => $event,];
		}
	}
	var_dump($result);