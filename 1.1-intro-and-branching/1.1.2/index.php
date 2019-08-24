



<?php

//  Ваш программный код, в котором определяются значения 

//  переменных для последующего задания текста и стилей

$hours = date("H");


if ($hours >= 6 && $hours < 11) {
    $greeting = 'Доброе утро!';
    $image = "https://pixabay.com/get/57e5d5444e5ba414f6d1867dda6d49214b6ac3e45657774f732b7ddd95/dew-1507498_1920.jpg";

} elseif ($hours >= 11 && $hours < 18) {
    $greeting =  'Добрый день!';   
    $image = "https://pixabay.com/get/52e0d3454d5aa914f6d1867dda6d49214b6ac3e45657774f732a79d295/polyommatus-icarus-4066785_1920.jpg";

} elseif ($hours >= 18 && $hours < 23) {
    $greeting = 'Добрый вечер!';  
    $image = "https://pixabay.com/get/54e1dc4a4d50b108f5d08460825668204022dfe05557774f702a79d4/autumn-219972_1280.jpg"; 

} else {
    $greeting = 'Доброй ночи!';
    $image = "https://pixabay.com/
    get/57e3d2404b55ad14f6d1867dda6d49214b6ac3e45657774f732a7edc96/sunset-1373171_1920.jpg";
   
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