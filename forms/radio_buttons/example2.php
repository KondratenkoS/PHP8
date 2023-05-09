<?php
	/*
		С помощью переключателей попросите пользователя выбрать его язык.
		Сделайте так, чтобы выбор не пропадал после отправки формы.
	*/
?>
	<form action="" method="POST">
		<p><input type="hidden" name="radio" value="0"></p>
		<p><input type="radio" name="radio" value="1" 
			<?php if(!empty($_POST['radio']) and $_POST['radio'] === '1') echo 'checked'; ?> > Ua</p>
			
		<p><input type="radio" name="radio" value="2"
			<?php if(!empty($_POST['radio']) and $_POST['radio'] === '2') echo 'checked'; ?> > Ru</p>
		<p><input type="radio" name="radio" value="3" 
			<?php if(!empty($_POST['radio']) and $_POST['radio'] === '3') echo 'checked'; ?>> Eng</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		if($_POST['radio'] === '1'){
			echo 'Ваша мова Українська';
		} else if($_POST['radio'] === '2'){
			echo 'Ваш язык русский';
		} else if($_POST['radio'] === '3'){
			echo 'Your language is english';
		}
	}