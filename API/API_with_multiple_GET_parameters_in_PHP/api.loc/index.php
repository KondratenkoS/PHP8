<?php
	//api
	
	if(isset($_GET['date1']) || isset($_GET['date2'])){
		if(dateCheck($_GET['date1']) || dateCheck($_GET['date2'])){
				$date1 = date_create($_GET['date1']);
			$date2 = date_create($_GET['date2']);
	
			$diff = date_diff($date1, $date2);
			echo $diff->format('%a дней');
		}
	} else {
		echo 'error';
	}
	
	
	
	function dateCheck($date){
		if(DateTime::createFromFormat("Y-m-d", $date)){
			return $date;
		} else {
			echo 'Неверный формат даты';
		}
	}