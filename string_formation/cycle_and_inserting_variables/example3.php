<?php
	/*
		Упростите следующий код:
		$products = [
			[
				'name'   => 'product1',
				'price'  => 100,
				'amount' => 5,
			],
			[
				'name'   => 'product2',
				'price'  => 200,
				'amount' => 6,
			],
			[
				'name'   => 'product3',
				'price'  => 300,
				'amount' => 7,
			],
		];
		Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.
	*/
	$products = [
		[
			'name'   => 'product1',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];
	foreach($products as $elem){
		echo "У нас есть $elem[name] по цене $elem[price] в количестве $elem[amount] шт.<br>";
	}