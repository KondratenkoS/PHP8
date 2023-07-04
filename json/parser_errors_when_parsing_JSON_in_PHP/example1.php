<?php
	/*
		Дана строка с некоторым JSON. Разберите его в структуру данных PHP.
		Выведите результат разбора или причину ошибки, если разобрать JSON не удалось.
	*/

	$json = '["a", "b", "c"]';
	
	$data = json_decode($json);
	var_dump($data);
	echo '<br>';
	
	$error = json_last_error();
	var_dump($error);
	
	 switch (json_last_error()) {
		case JSON_ERROR_NONE:
			echo 'ошибок нет';
		break;
		case JSON_ERROR_DEPTH:
			echo 'достигнута максимальная глубина стека';
		break;
		case JSON_ERROR_STATE_MISMATCH:
			echo 'некорректные разряды или несоответствие режимов';
		break;
		case JSON_ERROR_CTRL_CHAR:
			echo 'некорректный управляющий символ';
		break;
		case JSON_ERROR_SYNTAX:
			echo 'синтаксическая ошибка, некорректный JSON';
		break;
		case JSON_ERROR_UTF8:
			echo 'некорректные символы UTF-8, возможно неверно закодирован';
		break;
		default:
			echo 'неизвестная ошибка';
		break;
	}