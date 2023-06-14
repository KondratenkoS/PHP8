<?php
	require_once '../../connection/connection.php';
	$id = 1;
	
		$autors = "SELECT * FROM autors";
		$autor = mysqli_query($link, $autors) or die(mysqli_error($link));
		$autor = mysqli_fetch_assoc($autor);
		var_dump($autor);
		
		echo '<br>';
		
		$rubrics = "SELECT * FROM rubrics";
		$rubric = mysqli_query($link, $rubrics) or die(mysqli_error($link));
		$rubric = mysqli_fetch_assoc($rubric);
		var_dump($rubric);