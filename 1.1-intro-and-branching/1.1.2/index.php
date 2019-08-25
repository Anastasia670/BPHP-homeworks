



<?php

//  Ваш программный код, в котором определяются значения 

//  переменных для последующего задания текста и стилей

$hours = date("H");


if ($hours >= 6 && $hours < 11) {
	$image = 'img/img/1.jpg';
    $greeting = 'Доброе утро!';
    

} elseif ($hours >= 11 && $hours < 18) {
	$image = 'img/img/2.jpg';
    $greeting =  'Добрый день!';   
    

} elseif ($hours >= 18 && $hours < 23) {   
    $image = 'img/img/3.jpg'; 
    $greeting = 'Добрый вечер!';

} else {
    $image = 'img/img/4.jpg';
    $greeting = 'Доброй ночи!';
   
}

$day = date("N");

switch ($day):
	case 1: 
	$day = "понедельник."; break;
	case 2: 
	$day ="вторник."; break;
	case 3:
	$day = "среда."; break;
	case 4:
	$day = "четверг."; break;
	case 5:
    $day = "пятница."; break;
    case 6:
    $day = "суббота."; break;
    case 7:
    $day ="воскресенье."; break;
    endswitch;
?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>bPHP - 1.1.1</title>

    <!-- подключение стилевого файла -->

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body >
	<div class="container" style = "background-image: url(<?= $image; ?>)">
				
          <h1><?= $greeting ?> <br> Сегодня <?=$day ?></h1>
       
   </div>

</body>