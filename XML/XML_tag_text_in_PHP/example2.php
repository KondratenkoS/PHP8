<?php
	/*
		Дан следующий XML:

			<root>
				<user>
					<name>john</name>
					<surn>smit</surn>
				</user>
			</root>
		Выведите на экран имя и фамилию юзера.
	*/
	
	$xml = simplexml_load_file('test.xml'); //получаем фаел с XML
	echo $xml->user->name.'<br>';
	echo $xml->user->surn.'<br>';
?>
<pre>
	<?php
		print_r($xml);
	?>
</pre>