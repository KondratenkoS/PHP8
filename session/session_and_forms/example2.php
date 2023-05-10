<?php
	session_start();
	echo 'Меня зовут ' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . ' и мне ' . $_SESSION['age'] . ' года';