<?php
function hello($name, $day) {
	switch ($day) {
		case Пн:
		case Вт:
		case Ср:
		case Чт:
		case Пт:
		echo ('Привет, '.$name.'! Хорошего и продуктивного рабочего дня!');
		break;
		case Сб:
		case Вс:
		echo ('Привет, '.$name.'! Желаю вам хорошо отдохнуть в этот день!');
		break;
		default:
		echo ('Введите имя и день недели.');
	}
}
hello('Анна', 'Ср');
echo "<br>";
hello('Кирилл', 'Вс');
echo "<br>";
hello('Иван', '456');
?>