<?php
	/*
		Функция WEEK возвращает номер недели в году по дате.
		При наличии одного параметра возвращает порядковый 
		номер недели в году в диапазоне от 0 до 53 для регионов,
		где воскресенье считается первым днем недели.

		Второй необязательный параметр позволяет уточнить,
		с какого дня начинается неделя - с воскресенья или
		с понедельника. Неделя начинается с воскресенья, 
		если второй параметр равен 0, и с понедельника - если 1.
		YEARWEEK - год по дате, и номер недели в году
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT WEEK(date, 1) as num FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	