<?php
	//test
	/*
		Сделайте API, которое будет возвращать текущее время в формате часы-минуты-секунды.
	*/
	
	$url = 'http://localhost/php8/single_URL_API_in_PHP/api.loc/index.php';
	
	$res = file_get_contents($url);
	
	d($res);
	
	
	
	
	function d($data){ ?>
		<pre>
			<?php
				print_r($data);
			?>
		</pre>
<?php } ?>