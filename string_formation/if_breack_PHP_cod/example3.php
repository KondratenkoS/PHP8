<?php
	/*
		Даны дивы:

		<div>
			<p>text1</p>
			<p>text1</p>
			<p>text1</p>
		</div>
		<div>
			<p>text2</p>
			<p>text2</p>
			<p>text2</p>
		</div>
		<div>
			<p>text-</p>
			<p>text-</p>
			<p>text-</p>
		</div>
		Сделайте условие, которое будет показывать один из дивов.
	*/
	$a = 3;
	if($a === 1){ ?>
		<div>
			<p>text1</p>
			<p>text1</p>
			<p>text1</p>
		</div>
	<?php } else if($a === 2) { ?>
		<div>
			<p>text2</p>
			<p>text2</p>
			<p>text2</p>
		</div>
	<?php } else { ?>
		<div>
			<p>text-</p>
			<p>text-</p>
			<p>text-</p>
		</div>
	<?php }