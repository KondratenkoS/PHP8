<?php
	session_start();
	require_once 'connection/connection.php';
	//if(empty($_SESSION)){
		//header('Location: /php8/site_engine/forum/layout.php');
		//die();
	//}
	
	$query = "SELECT * FROM post";
	$post_result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($post = []; $row = mysqli_fetch_assoc($post_result); $post[] = $row);
?>

<pre>
	<?php
		print_r($post);
		//print_r($_POST['message']]);
	?>
</pre>