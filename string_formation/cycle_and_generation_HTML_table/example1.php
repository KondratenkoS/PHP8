<?php
	/*
		Дан следующий массив:
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
		Сформируйте с его помощью HTML таблицу.
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
	echo '<table>';
		foreach($products as $elem){
			echo '<tr>';
				echo "<td>$elem[name]</td>";
				echo "<td>$elem[price]</td>";
				echo "<td>$elem[amount]</td>";
			echo '</tr>';
		}
	echo '</table>';