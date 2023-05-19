<?php
	/*
		Сделайте так, чтобы в адресной строке можно было отправить
		GET запрос с id юзера и этот юзер удалялся из БД.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "DELETE FROM users WHERE id = $_GET[del]"; //в адресной строке передать-'?del=id'
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);