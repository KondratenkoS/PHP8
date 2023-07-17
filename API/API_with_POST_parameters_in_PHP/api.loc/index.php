<?php
	//api
	
	$goroscop = [
				 'znack1' => [
							  'date1' => 'goroscop1',
							  'date2' => 'goroscop2',
							  'date3' => 'goroscop3',
							  'date4' => 'goroscop4',
							],
				 'znack2' => [
							  'date1' => 'goroscop1',
							  'date2' => 'goroscop2',
							  'date3' => 'goroscop3',
							  'date4' => 'goroscop4',
							],
				 'znack3' => [
							  'date1' => 'goroscop1',
							  'date2' => 'goroscop2',
							  'date3' => 'goroscop3',
							  'date4' => 'goroscop4',
							 ],
	];
	
	echo $goroscop[$_POST['znack']][$_POST['date']];