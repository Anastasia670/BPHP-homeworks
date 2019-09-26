

<?php


$map = [

    [FALSE,TRUE,FALSE,FALSE,FALSE,FALSE],

    [FALSE,FALSE,FALSE,FALSE,FALSE,FALSE],

    [FALSE,FALSE,FALSE,FALSE,FALSE,FALSE],

    [FALSE,FALSE,FALSE,FALSE,FALSE,FALSE],

    [FALSE,FALSE,FALSE,FALSE,FALSE,FALSE],

    [FALSE,FALSE,FALSE,FALSE,FALSE,FALSE],

];



function groupReserve($map, $seats) {

    $counter = 0;
    $reserve = array();

    for ($i = 0; $i < count($map); $i++) {
        $row = $i + 1;
        $search = count($map[$i]) - $seats + 1;

        for ($j = 0; $j <=$search; $j++) {
             $place = $j +1;
            if ($map[$i][$j] == FALSE) {
                $counter++;
                $reserve[] = "ряд: $row, место: $place; ";

            } else {
                $counter = 0;                
                $reserve = array();

            }


            if ($counter == $seats) {
                echo "$seats места забронированы:";
                if (isset($reserve)) {
                foreach ($reserve as $key => $value) {
              	echo $value;

                }

               }
             

            }

        }

    }

}

groupReserve($map, 3);

?>




 
