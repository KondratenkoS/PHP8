<?php
	/*
		Преобразуйте следующий JSON в структуру PHP:

			$json = '{
				"user": {
					"name": "john",
					"surn": "smit"
				},
				"city": "London"
			}';

		Выведите на экран имя, фамилию и город.
	*/
	
	$json = '{
				"user": {
							"name": "john",
							"surn": "smit"
						},
				"city": "London"
			}';
	$data = json_decode($json);
	
	echo $data->user->name . '<br>';
	echo $data->user->surn . '<br>';
	echo $data->city;
?>

<pre>
	<?php
		print_r($data);
	?>
</pre>