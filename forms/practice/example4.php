<?php
	/*
		Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию
		на кнопку выведите список общих делителей этих двух чисел.
	*/
?>
	<form action="" method="POST">
		<p><input name="num1" value="<?= $_POST['num1'] ?? '' ?>"></p>
		<p><input name="num2" value="<?= $_POST['num2'] ?? '' ?>"></p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		$str = '';
		foreach(getDivisors($_POST['num1'], $_POST['num2']) as $elem){
			$str .= $elem . ', ';
		}
		echo "Общие делители чисел $_POST[num1] и $_POST[num2]: " . trim($str, ', ') ;
	}
	
	function getDivisors($num1, $num2){
        for($i = 1, $j = 1; $i <= $num1, $j <= $num2; $i++, $j++){
            if($num1 % $i === 0) {
                $arr1[] = $i;
            }
			if($num2 % $j === 0) {
                $arr2[] = $j;
            }
        }
        return array_unique(array_merge($arr1, $arr2));
    }