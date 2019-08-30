<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];


$fullName =  ucfirst($lastName) . ' ' .  ucfirst($firstName) . ' ' .  ucfirst($middleName); 
$fio = strtoupper(mb_substr($lastName, 0, 1)).strtoupper(mb_substr($firstName, 0, 1)).strtoupper(mb_substr($middleName, 0, 1));
$surnameAndInitials = ucfirst($lastName). ' ' . strtoupper(mb_substr($firstName, 0, 1)). '.' . strtoupper(mb_substr($middleName, 0, 1)) . '.';



?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>index.php</title>
  </head>
<body>
	<style>
     p {
    line-height: 1.5;
    color: grey;
    font-weight: bold;
   }
  </style>

    <p> 
    	Полное имя: '<?=$fullName;?>' <br>
        Фамилия и инициалы: '<?=$surnameAndInitials;?>' <br>  
        Аббревиатура: '<?=$fio;?>' 
    </p> 

    
</body>
</html>
