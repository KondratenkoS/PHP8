<?php
	/*
		Дан инпут и кнопка. В инпут вводится число. По нажатию
		на кнопку выведите список делителей этого числа.
	*/
?>
	<form action="" method="POST">
		<p><input name="num" value="<?= $_POST['num'] ?? '' ?>"> Введите число</p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		$str = '';
		foreach(getDivisors($_POST['num']) as $elem){
			$str .= $elem . ', ';
		}
		echo "Делители числа $_POST[num]: " . trim($str, ', ') ;
	}
	
	function getDivisors($num){
        for($i = 1; $i <= $num; $i++){
            if($num % $i === 0) {
                $arr[] = $i;
            }
        }
        return $arr;
    }