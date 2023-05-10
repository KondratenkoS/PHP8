<?php
	session_start();
?> 
<ul>
	<?php
		foreach($_SESSION as $elem){
			echo "<li>$elem</li>";
		}
	?>
</ul>