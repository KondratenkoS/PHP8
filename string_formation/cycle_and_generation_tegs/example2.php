<?php
	/*
		Дан массив:
		$arr = ['text1', 'text2', 'text3'];
		Сформируйте с его помощью следующий HTML код:

		<select>
			<option>text1</option>
			<option>text2</option>
			<option>text3</option>
		</select>
	*/
	$arr = ['text1', 'text2', 'text3'];
	
	echo '<select>';
		foreach($arr as $elem){
			echo "<option>$elem</option>";
		}
	echo '</select>';