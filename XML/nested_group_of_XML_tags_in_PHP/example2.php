<?php
	/*
		Дан следующий XML:

			<root>
				<product cost="100" amount="3">
					<name>prod1</name>
					<category>cat1</category>
				</product>
				<product cost="200" amount="4">
					<name>prod2</name>
					<category>cat2</category>
				</product>
				<product cost="300" amount="5">
					<name>prod3</name>
					<category>cat3</category>
				</product>
			</root>
		Выведите на экран название, категорию, цену и количество каждого продукта.
	*/
	
	$xml = simplexml_load_file('test.xml');
	foreach($xml->product as $prod){
		echo 'Название: '.$prod->name.'<br>';
		echo 'Категория: '.$prod->category.'<br>';
		echo 'Цена: '.$prod['cost'].'<br>';
		echo 'Количество: '.$prod['amount'].'<br><br>';
	}