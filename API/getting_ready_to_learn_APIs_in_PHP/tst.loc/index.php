<?php
	//test
	$url = 'http://localhost/php8/API/getting_ready_to_learn_APIs_in_PHP/api.loc/index.php';
	
	$res = file_get_contents($url);
	
	d($res);
	
	
	
	
	function d($data){ ?>
		<pre>
			<?php
				print_r($data);
			?>
		</pre>
<?php } ?>