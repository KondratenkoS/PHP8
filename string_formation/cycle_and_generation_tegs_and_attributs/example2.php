<?php
	/*
		Дан массив:
		$arr = [
			['value' => '1', 'text' => 'text1'],
			['value' => '2', 'text' => 'text2'],
			['value' => '3', 'text' => 'text3'],
		];
		Сформируйте с его помощью следующий HTML код:

		<select>
			<option value="1">text1</option>
			<option value="2">text2</option>
			<option value="3">text3</option>
		</select>
	*/
	$arr = [
			['value' => '1', 'text' => 'text1'],
			['value' => '2', 'text' => 'text2'],
			['value' => '3', 'text' => 'text3'],
		];
	echo '<select>';
		foreach($arr as $elem){
			echo "<option value='$elem[value]'>$elem[text]</option>";
		}
	echo '</select>';