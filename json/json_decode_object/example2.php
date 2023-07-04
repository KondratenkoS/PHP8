<?php
	/*
		Преобразуйте следующий JSON в структуру PHP:

			$json = '{
				"ru": ["пн", "вт", "ср"],
				"en": ["mn", "tu", "wd"]
			}';

		Выведите на экран русское название среды.
	*/
	
	$json = '{
				"ru": ["пн", "вт", "ср"],
				"en": ["mn", "tu", "wd"]
			}';
	$data = json_decode($json);
	
	echo $data->ru[2].'<br>';
	echo $data->en[2];
?>

<pre>
	<?php
		print_r($data);
	?>
</pre>