<?php
	/*
		Даны файлы со следующей версткой:
		<!DOCTYPE html>
		<html>
			<head>
				<title>title</title>
			</head>
			<body>
				<header>
					header
				</header>
				<aside>
					sidebar
				</aside>
				<main>
					content
				</main>
				<header>
					footer
				</header>
			</body>
		</html>
		Пусть верстка файлов отличается лишь тайтлами и контентом.
		Вынесите содержимое хедера, футера и сайдбара в отдельные
		подключаемые файлы.
	*/
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>title</title>
		</head>
		<body>
			<?php include 'header.php'; ?>
			<?php include 'sidebar.php'; ?>
			<main>
				content
			</main>
			<?php include 'footer.php'; ?>
		</body>
	</html>