<?php
	session_start();
	require_once 'connection/connection.php';
	if(empty($_SESSION['auth'])){
		header('Location: /php8/site_engine/forum/layout.php');
		die();
	}
	
	if(!empty($_POST['message'])){
		$userId = $_SESSION['user']['id'];
		$time = time();
		$query = "INSERT INTO `post` (`user_id`, `topic_id`, `message`, `date_create`) 
				  VALUES ('$userId', '$_POST[topicId]', '$_POST[message]', '$time')";
		$user_result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		$query = "UPDATE topic SET count_message = count_message + 1,
								   reply_date = '$time',
								   reply_user_id = '$userId'
				  WHERE id = '$_POST[topicId]'";
		$user_result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		header('location: /php8/site_engine/forum/chat.php?topic_id=' . $_POST['topicId']);
		die();
	}