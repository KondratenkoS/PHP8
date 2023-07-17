<?php
	//api
	require_once 'connection/connection.php';
	
	$country_name = $_GET['country_name'];
	
	$query = "SELECT id FROM countries WHERE country_name = '$country_name'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	
	
	$query = "SELECT * FROM cities WHERE id_country = '$data[id]'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for($cities = []; $row = mysqli_fetch_assoc($result); $cities[$row['id']] = $row);
	
	header('Content-Type: application/json');
	echo json_encode($cities, true);
?>
<pre>
	<?php //print_r($cities); ?>
</pre>