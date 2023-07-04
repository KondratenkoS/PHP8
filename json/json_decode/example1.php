<?php
	/*
		Преобразуйте следующий JSON в структуру PHP:

		$json = '[
			"x",
			"y",
			"z"
		]';
	*/
		$json = '[
			"x",
			"y",
			"z"
		]';

		$data = json_decode($json);
		var_dump($data);
?>

<pre>
	<?php
		print_r($data);
	?>
</pre>