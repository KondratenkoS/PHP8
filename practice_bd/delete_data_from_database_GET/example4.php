<?php
	/*
		Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:

		<table>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>salary</th>
				<th>delete</th>
			</tr>
			<tr>
				<td>1</td>
				<td>user1</td>
				<td>23</td>
				<td>400</td>
				<td><a href="?del=1">удалить</a></td>
			</tr>
			<tr>
				<td>2</td>
				<td>user2</td>
				<td>25</td>
				<td>500</td>
				<td><a href="?del=2">удалить</a></td>
			</tr>
			<tr>
				<td>3</td>
				<td>user3</td>
				<td>23</td>
				<td>500</td>
				<td><a href="?del=3">удалить</a></td>
			</tr>
		</table>
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
?>

	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>salary</th>
			<th>delete</th>
		</tr>
<?php	foreach($data as $elem){ ?>
			<tr>
				<th><?= $elem['id'] ?></th>
				<th><?= $elem['name'] ?></th>
				<th><?= $elem['age'] ?></th>
				<th><?= $elem['salary'] ?></th>
				<th><a href="?del=<?= $elem['id'] ?>"> Удалить</a></th>
			</tr>
<?php	} ?> </table>
<?php
	if(!empty($_GET)){
		$query = "DELETE FROM users WHERE id = $_GET[del]";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	}