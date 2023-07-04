<?php
	/*
		Дан следующий XML:

			<root>
				<user age="23" salary="1000">john</user>
			</root>
		Выведите на экран имя, возраст и зарплату юзера.
	*/
	
	$xml = simplexml_load_file('test.xml');
	echo 'Имя: '.$xml->user.'<br>';
	echo 'Возраст: '.$xml->user['age'].'<br>';
	echo 'зарплата: '.$xml->user['salary'].'<br>';
?>

<pre>
	<?php
		print_r($xml);
	?>
</pre>