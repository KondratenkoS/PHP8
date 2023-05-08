<?php
	/*
		Дан массив:
			$arr = [
				[
					'name' => 'user1',
					'age'  => 30,
				],
				[
					'name' => 'user2',
					'age'  => 31,
				],
				[
					'name' => 'user3',
					'age'  => 32,
				],
			];

		С помощью этого массива и цикла сформируйте следующий HTML код:

		<div>
			<p>name: user1</p>
			<p>age: 30</p>
		</div>
		<div>
			<p>name: user2</p>
			<p>age: 31</p>
		</div>
		<div>
			<p>name: user3</p>
			<p>age: 32</p>
		</div>
	*/
	$arr = [
				[
					'name' => 'user1',
					'age'  => 30,
				],
				[
					'name' => 'user2',
					'age'  => 31,
				],
				[
					'name' => 'user3',
					'age'  => 32,
				],
			];
		foreach($arr as $elem){ ?>
		<div>
			<p><?= "name: $elem[name]" ?></p>
			<p><?= "age: $elem[age]" ?></p>
		</div>
<?php	}