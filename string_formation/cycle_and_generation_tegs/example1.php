<?php
	/*
		С помощью цикла сформируйте следующий HTML код:
		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	*/
	echo '<ul>';
	for($i = 1; $i <= 5; $i++){
		echo"<li>$i</li>";
	}
	echo '</ul>';