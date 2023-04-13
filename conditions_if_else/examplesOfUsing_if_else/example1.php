<?php
	/*
		В какую треть часа попадает указанное количество минут.
	*/
	$min = 44;
	if($min >= 1 and $min <= 20){
		echo 'First quarter';
	} else if($min >= 21 and $min <= 40){
		echo 'Second quarter';
	} else if($min >= 41 and $min <= 60){
		echo 'Third quarter';
	}