<?php

$db = new PDO('mysql:host=localhost;dbname=test_blog', 'root', '');

//Вставка в БД

// $sql = "INSERT INTO `users` (name, email) VALUES (:name, :email)";
// $stmt = $db->prepare($sql);
// $username = "Flash";
// $useremail = "123@gmail.com";
// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':email', $useremail);
// $stmt->execute();
// // $stmt->execute(array(':username' => $username, ':password' => $password));
// // количество затронутых строк
// echo "<p>Было затронуто строк ".$stmt->rowCount()."</p>";
// echo "<p>ID последней записи ".$db->lastInsertId()."</p>";

//Обновление записей в БД

// $sql = "UPDATE `users` SET name = :name WHERE id = :id";
// $stmt = $db->prepare($sql);
// $username = "New Flash";
// $id = '3';
// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':id', $id);
// $stmt->execute();
// echo "<p>Было затронуто строк ".$stmt->rowCount()."</p>";

//Удаление записи в БД

$sql = "DELETE FROM `users` WHERE id = :id";
$stmt = $db->prepare($sql);
$id= "2";
$stmt->bindValue(':id', $id);
$stmt->execute();
echo "<p>Было затронуто строк ".$stmt->rowCount()."</p>";