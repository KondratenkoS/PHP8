<?php
	/*
		Выведите с помощью этого массива столбец продуктов
		в каком-нибудь придуманном вами формате.
	*/
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
	foreach($products as $value){
		echo 'Я купил ' . $value['name'] . ' в количестве ' . $value['amount'] . ' килограм, по цене ' . $value['price'] . ' за кило.<br>';
	}