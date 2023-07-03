<?php
	session_start();
	require_once 'connection/connection.php';
	
	if(!empty($_POST['topic_name']) || !empty($_POST['message'])){
		?>
			<pre>
				<?php print_r($_POST); ?>
			</pre>
		<?php
		$time = time();
		$query = "INSERT INTO `topic` (`topic_name`, `count_message`, `user_id`, `date_create`)
				  VALUES ('{$_POST['topic_name']}', '1', '{$_SESSION['user']['id']}', '$time')";
		$topic_result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		$query = "SELECT id FROM topic WHERE topic_name = '{$_POST['topic_name']}'";
		$post_result = mysqli_query($link, $query) or die(mysqli_error($link));
		$topicName = mysqli_fetch_assoc($post_result);
		
		$query = "INSERT INTO `post` (`user_id`, `topic_id`, `message`, `date_create`)
				  VALUES ('{$_SESSION['user']['id']}', '{$topicName['id']}', '{$_POST['message']}', '$time')";
		$topic_result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		header('location: /php8/site_engine/forum/layout.php');
		die();
	}