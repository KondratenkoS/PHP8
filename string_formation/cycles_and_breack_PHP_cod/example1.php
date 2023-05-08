<?php
	/*
		Сформируйте с помощью цикла следующий HTML код:

		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	*/
?> 
	<ul>
<?php	for($i = 1; $i<= 5; $i++){ ?>
		<li>
			<?= $i ?>
		</li>
		<?php } ?> 
	</ul>

<?php