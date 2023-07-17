<?php
	//api
	header('Content-Type: application/json');
	$holidays = [
					'06-07-23' => [
									'date1' => 'holiday1',
									'date2' => 'holiday2',
									'date3' => 'holiday3',
									'date4' => 'holiday4',
									'date5' => 'holiday5',
									'date6' => 'holiday6',
								],
				];
	
	if(isset($_GET['date'])){
		echo json_encode($holidays[$_GET['date']]);
	}