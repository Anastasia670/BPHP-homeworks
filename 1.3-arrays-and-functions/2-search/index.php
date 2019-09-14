<?php

function generate($rows, $placesPerRow, $avaliableCount) {
	$map = [];

    if ($avaliableCount > ($rows * $placesPerRow)) {
        return false;
    }
    
    


    for ($i=0; $i < $rows; $i++) { 
        for ($j=0; $j < $placesPerRow; $j++) {             

            $map[$i][$j] = false;
            
        };
    };

    return $map;
};


function reserve(&$map, $row, $place) {

    if ($map[$row-1][$place-1] == false) {
        $map[$row-1][$place-1] = true;
       
        return true;
    } else {
        return false;
    };
};


$availChairs = 50;
$map = generate(5, 8, $availChairs);
$requiredRow = 3;
$requiredPlace = 5;
    


$reverve = reserve($map, $requiredRow, $requiredPlace);

logReserve($requiredRow, $requiredPlace, $reverve);



function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;

    };

};

function groupReserve($map, $seats) {
        $counter = 0;
        $reserve = [];            


    for($i=0; $i<count($map); $i++){

        for($j=0; $j<(count($map[$i])-$seats + 1); $j++) {

            if($counter !== $seats) {

                if($map[$i][$j] === FALSE) {

                    $counter++;

                    $reserve[] =  [$i, $j]; 

                } else {

                   $counter = 0;

                }

            }else {

                return $reserve;

            }

        }     

    }

}


print_r(groupReserve($map, 3));
var_dump(groupReserve($map, 3));



?>