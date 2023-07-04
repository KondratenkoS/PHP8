<?php
	/*
		Дан следующий XML:

			<root>
				<product cost="100" amount="3">
					prod1
				</product>
				<product cost="200" amount="4">
					prod2
				</product>
				<product cost="300" amount="5">
					prod3
				</product>
			</root>
		Выведите на экран название, цену и количество каждого продукта.
	*/
	
	$xml = simplexml_load_file('test.xml');
	foreach($xml->product as $product){
		echo 'Название: '.$product.'<br>';
		echo 'Цена: '.$product['cost'].'<br>';
		echo 'Количество: '.$product['amount'].'<br><br>';
	}