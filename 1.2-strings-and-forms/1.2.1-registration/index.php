<?php

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = $_POST['code'];
$codeWord = 'netology';


if(!preg_match('/[^@\/\*?,;:]/', $login)){
	echo 'Поле имени содержит недопустимые символы @/*?,;:.<br>';
}elseif (strlen($password) < 8) {
	echo 'Пароль должен быть не менее 8 символов <br>';
}elseif (!preg_match('/[0-9a-z]+@[a-z]+.[a-z]/', $email)){
	echo 'Введите почтовый адрес в формате somemail@email.com <br>';
}elseif (strlen($firstName) === 0||strlen($lastName) === 0 || strlen($firstName) === 0 ){
	echo 'Длина каждого из полей должна быть не меньше 1-го символа <br>';
}elseif ($codeWord !=trim(strtolower($code))) {
	echo 'Кодовое слово указано неверно <br>';
} else{
	echo 'Регистрация прошла успешно <br>';
}

 
?>