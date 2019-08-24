
<?php

$variable = 4;

if (is_bool($variable)) {
  $type = $variable;
    echo "bool";

} elseif (is_float($variable)){
    $type = $variable;
    echo "float";

} elseif (is_int($variable)){
	$type = $variable;
	echo "int";

} elseif (is_string($variable)){
	$type = $variable;
	echo "string";

} elseif (is_null($variable)){
	$type = $variable;
	echo "null";
	
} else{
	$type = $variable;
	echo "other";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$type?></p>
</body>
</html>