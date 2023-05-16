<?php
	/*
		Функция SUBSTRING_INDEX возвращает подстроку из строки 
		перед появлениям N вхождений разделителя. Если N положителен,
		то возвращается все, что находится слева от последнего 
		разделителя (считая слева). Если N отрицателен, то возвращается
		все, что находится справа от последнего разделителя (считая справа).
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT SUBSTRING_INDEX(text1, ' ', 2) as string FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	