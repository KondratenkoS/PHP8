<?php
	/*
		Дан массив:
			$arr = ['user1', 'user2', 'user3'];
		С помощью этого массива и цикла сформируйте следующий HTML код:

		<div>
			<h2>user1</h2>
			<p>text</p>
		</div>
		<div>
			<h2>user2</h2>
			<p>text</p>
		</div>
		<div>
			<h2>user3</h2>
			<p>text</p>
		</div>
	*/
	$arr = ['user1', 'user2', 'user3'];
	foreach($arr as $elem){ ?>
		<div>
			<h2><?= $elem ?></h2>
			<p>text</p>
		</div>
<?php	}