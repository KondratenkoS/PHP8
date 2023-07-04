<?php
	/*
		Дан следующий XML:

			<root>
				<user>
					<name>john</name>
					<surn>smit</surn>
				</user>
				<user>
					<name>eric</name>
					<surn>wils</surn>
				</user>
				<user>
					<name>kyle</name>
					<surn>tayl</surn>
				</user>
			</root>
		Выведите на экран имя и фамилию каждого юзера.
	*/
	
	$xml = simplexml_load_file('test.xml');
	foreach($xml->user as $user){
		echo $user->name.' '.$user->surn.'<br>';
	}