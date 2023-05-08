<?php
	/*
		Дан следующий массив:
		$arr = [
			['href'=>'page1.html', 'text'=>'text1'],
			['href'=>'page2.html', 'text'=>'text2'],
			['href'=>'page3.html', 'text'=>'text3'],
		];
		Сформируйте с его помощью следующий HTML код:
		<ul>
			<li><a href="page1.html">text1</a></li>
			<li><a href="page2.html">text2</a></li>
			<li><a href="page3.html">text3</a></li>
		</ul>
	*/
	$arr = [
			['href'=>'page1.html', 'text'=>'text1'],
			['href'=>'page2.html', 'text'=>'text2'],
			['href'=>'page3.html', 'text'=>'text3'],
		];
	echo '<ul>';
		foreach($arr as $elem){
			echo "<li><a href='$elem[href]'>$elem[text]</li>";
		}
	echo '</ul>';