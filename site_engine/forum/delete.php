<?php
	session_start();
	require_once 'connection/connection.php';
	if(empty($_SESSION['auth'])){
		header('Location: /php8/site_engine/forum/layout.php');
		die();
	}

	$query = "DELETE FROM post WHERE id = '$_REQUEST[messageId]'";
	mysqli_query($link, $query) or die(mysqli_error($link));

	$query = "UPDATE topic SET count_message = count_message -1
				  WHERE id = '$_REQUEST[topic_id]'";
	mysqli_query($link, $query) or die(mysqli_error($link));

		header('location: /php8/site_engine/forum/chat.php?topic_id=' . $_GET['topic_id']);
		die();
