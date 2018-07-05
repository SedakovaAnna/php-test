<?php
$db = new PDO('mysql:host=localhost;dbname=WD03-sedakova-filmoteka', 'root', '');

$sql = "SELECT * FROM `films`";
$result = $db->query($sql);
echo "<h2>Записи по одной:</h2><br>";
while( $film = $result->fetch(PDO::FETCH_ASSOC) ) {
	// print_r($film);
	echo "Название фильма: " . $film['title'] . '<br>';
	echo "Жанр фильма: " . $film['genre'] . '<br>';
	echo "<br><br>";
}

echo "<hr>";
echo "<br>";

$sql = "SELECT * FROM `films`";
$result = $db->query($sql);
$films = $result->fetchAll(PDO::FETCH_ASSOC);
// print_r($result->fetchAll(PDO::FETCH_ASSOC));
echo "<h2>Обход по массиву:</h2><br>";
foreach ($films as $film) {
	echo "Название фильма: " . $film['title'] . '<br>';
	echo "Жанр фильма: " . $film['genre'] . '<br>';
	echo "<br><br>";
}

echo "<hr>";
echo "<br>";

$sql = "SELECT * FROM `films`";
$result = $db->query($sql);
$result->bindColumn('id', $id);
$result->bindColumn('title', $title);
$result->bindColumn('genre', $genre);
$result->bindColumn('year', $year);
echo "<h2>Вывод записей с привязкой данных к переменной:</h2><br>";
while ( $result->fetch(PDO::FETCH_ASSOC) ) {
	echo "Название: {$title} <br>";
	echo "Жанр: {$genre} <br>";
	echo "Год: {$year} <br>";
	echo "<br><br>";
}