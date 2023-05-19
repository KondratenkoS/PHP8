<?php
	/*
		Выведите записи нашей таблицы в следующем виде:

		<table>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>salary</th>
			</tr>
			<tr>
				<td>1</td>
				<td>user1</td>
				<td>23</td>
				<td>400</td>
			</tr>
			<tr>
				<td>2</td>
				<td>user2</td>
				<td>25</td>
				<td>500</td>
			</tr>
			<tr>
				<td>3</td>
				<td>user3</td>
				<td>23</td>
				<td>500</td>
			</tr>
		</table>
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	
	echo '<table>';
	foreach($data as $elem){
		echo "
				<tr>
					<td>$elem[id]</td>
					<td>$elem[name]</td>
					<td>$elem[age]</td>
					<td>$elem[salary]</td>
				</tr>
			 ";
	}
	echo '</table>';