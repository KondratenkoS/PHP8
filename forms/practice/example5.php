<?php
	/*
		Напишите скрипт, который будет находить корни квадратного уравнения.
		Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения.
	*/
?>
	<form action="" method="POST">
		<p><input name="num1" value="<?= $_POST['num1'] ?? '' ?>"></p>
		<p><input name="num2" value="<?= $_POST['num2'] ?? '' ?>"></p>
		<p><input name="num3" value="<?= $_POST['num3'] ?? '' ?>"></p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST)){
		$result = eq_roots($_POST['num1'], $_POST['num2'], $_POST['num3']);
		echo 'Корни уравнения:<br>'
				. $result[0] . '<br>'
				. $result[1];
	}

	function eq_roots($a, $b, $c) {
    if ($a==0) return false;

    if ($b==0) {
        if ($c<0) {
            $x1 = sqrt(abs($c/$a));
            $x2 = sqrt(abs($c/$a));
        } elseif ($c==0) {
            $x1 = $x2 = 0;
        } else {
            $x1 = sqrt($c/$a).'i';
            $x2 = -sqrt($c/$a).'i';
        }
    } else {
        $d = $b*$b-4*$a*$c;
        if ($d>0) {
            $x1 = (-$b+sqrt($d))/2*$a;
            $x2 = (-$b-sqrt($d))/2*$a;
        } elseif ($d==0) {
            $x1 = $x2 = (-$b)/2*$a;
        } else {
            $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
            $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
        }
    }
    return array($x1, $x2);
}