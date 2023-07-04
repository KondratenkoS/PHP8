<?php
	/*
		Дан следующий XML:

			<root>
				<name>john</name>
			</root>
		Выведите на экран имя юзера.
	*/
	
	$xml = simplexml_load_file('test.xml'); //получаем фаел с XML
	echo $xml->name.'<br>';
?>
<pre>
	<?php
		print_r($xml);
	?>
</pre>