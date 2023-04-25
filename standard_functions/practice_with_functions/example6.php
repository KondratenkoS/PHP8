<?php
	/* #6
		Найдите факториал заданного числа.
	*/
	function fact($n) {
    if ($n <= 0) return 1;
		return $n * fact ($n-1);
	}
	echo fact(4);