<?php

require "db.php";

// Создание новой записи
// $course = R::dispense('courses');
// $course->title = "Курс по верстке";
// $course->tuts = 10;
// $course->homeworks = 10;
// $course->level = "Для новичков";
// R::store($course);

// Получение записей из БД
// $courses = R::find('courses');
// 	// print_r($courses);
// foreach ($courses as $course) {
// 	// print_r($course);
// 	echo "id: " . $course->id . "<br>";
// 	echo "Название: " . $course->title . "<br>";
// 	echo "Количество уроков: " . $course->tuts . "<br>";
// 	echo "Уровень: " . $course->level . "<br>";
// 	echo "<hr>";
// }

// Обновление записей в БД
// $course = R::load('courses', 3);
// // print_r($course);
// echo "id: " . $course->id . "<br>";
// echo "Название: " . $course->title . "<br>";
// echo "Количество уроков: " . $course->tuts . "<br>";
// echo "Уровень: " . $course->level . "<br>";
// $course->title = "Курс по верстве. Ступень 2";
// $course->tuts = 12;
// R::store($course);

// Удаление записей из БД
$course = R::load('courses', 2);
R::trash($course);
