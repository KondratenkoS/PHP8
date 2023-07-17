<?php
	//api
	echo '<pre>';
		var_dump(json_decode($_POST['json'], true));
	echo '</pre>';
	$arr = json_decode($_POST['json'], true);

	$events = [
				 '06.07.2023' => [
								  'event description1',
								  'event description2',
								  'event description3',
								  'event description4',
							],
				 '12.07.2023' => [
							  	  'event description1',
								  'event description2',
							],
				 '15.07.2023' => [
							  	  'event description1',
								  'event description2',
								  'event description3',
							 ],
				 '20.07.2023' => [
							  	  'event description1',
								  'event description2',
								  'event description3',
								  'event description4',

							 ],
	];

	foreach($arr as $date){
		foreach($events[$date] as $value){
			echo $date.' '.$value.'<br>';
		}
	}
	
	
	
	
	
	
	
	