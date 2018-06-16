<?php
if (!empty($_POST)) {
	$message = "Вам пришло новое сообщение с сайта от пользователя.\n"
				. "Имя: " . $_POST['name'] . "\n"
				. "Email: " . $_POST['email'] . "\n"
				. "Сообщение: \n " . $_POST['message'];
	$resault = mail("tuzik198@mail.ru", "Сообщение с сайта", $message);

	if ($resault) {
		echo "Сообщение отправлено";
	} else {
		echo "Ошибка";
	}
}

?>

<form action="index.php" method="post">
	<input type="text" name="name" placeholder="Имя"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<textarea name="message" id="" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="Отправить">
</form>