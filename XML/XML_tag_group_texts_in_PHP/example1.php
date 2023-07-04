<?php
	/*
		Дан следующий XML:

			<root>
				<name>john</name>
				<name>eric</name>
				<name>kyle</name>
			</root>
		Выведите на экран имя каждого юзера.
	*/
	
	$xml = simplexml_load_file('test.xml');
	foreach($xml->name as $name){
		echo $name.' ';
	}