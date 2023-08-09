<?php
require_once 'FormHelper.php';

	$fh = new FormHelper();
	
	echo $fh->openForm(['action' => '', 'method' => 'GET']) . '<br>';
		echo $fh->input(['name' => 'year']) . '<br>';
		echo $fh->textarea(['name' => 'text']);
		echo $fh->close('textarea') . '<br>';
		echo $fh->password(['name' => 'pass']) . '<br>';
		echo $fh->hidden(['name' => 'hidde']) . '<br>';
		echo $fh->checkbox(['name' => 'check']) . '<br>';
		echo $fh->submit() . '<br>';
	echo $fh->closeForm() . '<br>';