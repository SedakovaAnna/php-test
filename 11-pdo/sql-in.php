<?php

$db = new PDO('mysql:host=localhost;dbname=test_blog', 'root', '');

// 1. Выборка без защиты от sql инъекций

// $username = 'Jocker';
// $password = '1234';
// $sql = "SELECT * FROM `users` WHERE name='{$username}' AND password = '{$password}' LIMIT 1";
// $result = $db->query($sql);
// echo "<h2>Выборка без защиты от sql инъекций:</h2><br>";
// // print_r( $result->fetch(PDO::FETCH_ASSOC) );
// if ( $result->rowCount() == 1) {
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя: {$user['name']} <br>";
// 	echo "Пароль: {$user['password']} <br>";
// }



//2. выборка с защитой от sql инъекций в ручном режиме

// $username = 'Jocker';
// $password = '1234';
// $username = $db->quote( $username );
// $username = strtr($username, array('_' => '\_', '%' => '\%'));//замена символов
// $password = $db->quote( $password );
// $username = strtr($password, array('_' => '\_', '%' => '\%'));
// $sql = "SELECT * FROM `users` WHERE name='{$username}' AND password = '{$password}' LIMIT 1";
// $result = $db->query($sql);
// if ( $result->rowCount() == 1) {
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользователя: {$user['name']} <br>";
// 	echo "Пароль: {$user['password']} <br>";
// }


//3. выборка с защитой в автоматическом режиме

// $sql = "SELECT * FROM `users` WHERE name = :username AND password = :password LIMIT 1";
// $stmt = $db->prepare($sql);
// $username = 'Jocker';
// $password = '1234';
// $stmt->bindValue(':username', $username);//подстановка
// $stmt->bindValue(':password', $password);
// $stmt->execute();//выполнение
// // без bindValue передача массивом сразу в execute
// // $stmt->execute(array(':username' => $username, ':password' => $password));
// $stmt->bindColumn('name', $name);
// $stmt->bindColumn('email', $email);
// echo "<h2>Выборка записей с защитой от SQL инъекций</h2><br>";
// $stmt->fetch();
// echo "Имя пользователя: {$name} <br>";
// echo "Email: {$email} <br>";

//4. выборка с защитой в автоматическом режиме, другой вариант запроса

$sql = "SELECT * FROM `users` WHERE name = ? AND password = ? LIMIT 1";
$stmt = $db->prepare($sql);
$user = 'Jocker';
$password = '1234';
$user = htmlentities($user);
$stmt->bindValue(1, $user);//подстановка 1 параметра
$stmt->bindValue(2, $password);
$stmt->execute();
$stmt->bindColumn('name', $name);
$stmt->bindColumn('email', $email);
// без bindValue передача массивом сразу в execute
// $stmt->execute(array($username, $password));
echo "<h2>Выборка записей с защитой от SQL инъекций 2 вариант</h2><br>";
$stmt->fetch();
echo "Имя пользователя: {$name} <br>";
echo "Email: {$email} <br>";
$string = "<script>alert('Привет');</script>";
$string = htmlentities($string);
echo $string;