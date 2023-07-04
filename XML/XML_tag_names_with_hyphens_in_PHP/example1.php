<?php
	/*
		Дан следующий XML:

			<root>
				<user-name>john</user-name>
				<user-surn>smit</user-surn>
			</root>
		Выведите на экран имя и фамилию юзера.
	*/
	
	$xml = simplexml_load_file('test.xml');
	echo $xml->{'user-name'}.'<br>';
	echo $xml->{'user-surn'};