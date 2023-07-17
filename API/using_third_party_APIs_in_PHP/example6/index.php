<!DOCTYPE html>
<?php
	include 'example6.php';
?>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
			  rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
					 integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		<title>Конвертер валют</title>
	</head>
	<body>
		<nav class="navbar bg-secondary text-white">
			<div class="container">
				<h1>Конвертер валют</h1>
			</div>
		</nav>
		<div class="container p-3 mt-4">
			<form action="example6.php" method="GET">
				<label><h5><b>Введите дату</b></h5></label>
				<div class="input-group flex-nowrap">
					<span class="input-group-text" id="addon-wrapping">Год</span>
					<input name="year" value="<?= date('Y', time())?>" type="text" class="form-control" placeholder="<?= date('Y', time())?>" aria-label="Username" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<span class="input-group-text" id="addon-wrapping">Месяц</span>
					<input name="month" value="<?= date('m', time())?>" type="text" class="form-control" placeholder="<?= date('m', time())?>" aria-label="Username" aria-describedby="addon-wrapping">
				</div>
				<div class="input-group flex-nowrap">
					<span class="input-group-text" id="addon-wrapping">День</span>
					<input name="day" value="<?= date('d', time())?>" type="text" class="form-control" placeholder="<?= date('d', time())?>" aria-label="Username" aria-describedby="addon-wrapping">
				</div>
			
				<label><b><h5>Выбирите валюту</b></h5></label>
				<select name="r030" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">			
				
					<?php foreach($array as $values){
						foreach($values as $value){ ?>
							<option value="<?=$value['r030']?>"><?=$value['txt']?></option>
					<?php	}
					} ?>
					
					
				</select>
				<label><b><h5>Введите сумму для конвертации</b></h5></label>
				<div class="input-group mb-3">
					<span class="input-group-text">₴</span>
					<input type="text" name="num" class="form-control" value="<?= $_GET['num'] ?? ''?>" aria-label="Amount (to the nearest dollar)">
					<span class="input-group-text">Грн.</span>
				</div>
				<br><button class="btn btn-success" type="submit">Расчитать</button><br>
			</form>
			
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Название валюты</th>
						<th scope="col">Сумма в гривне</th>
						<th scope="col">Сокращение</th>
						<th scope="col">Коэффициент</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?=$_SESSION['tst'] ?? ''?></td>
						<td><?=$_SESSION['convert'] ?? ''?></td>
						<td><?=$_SESSION['cc'] ?? ''?></td>
						<td><?=$_SESSION['rate'] ?? ''?></td>
					</tr>
				</tbody>
			</table>
			
		</div>
		
	</body>
</html>
