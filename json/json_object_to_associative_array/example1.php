<?php
	/*
		Преобразуйте следующий JSON в ассоциативный массив PHP:

			$json = '{
				"ru": ["пн", "вт", "ср"],
				"en": ["mn", "tu", "wd"]
			}';

		Выведите на экран английское название вторника.
	*/
	
	$json = '{
				"ru": ["пн", "вт", "ср"],
				"en": ["mn", "tu", "wd"]
			}';
	$data = json_decode($json, true);

	echo $data['ru'][1];
?>

<pre>
	<?php
		print_r($data);
	?>
</pre>