

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

     //$reserve =array();  


    for($i=0; $i<count($map); $i++){
    $counter = 0;    
    $row = $i + 1;
    $reserve = ["Ряд $row"];

    //$search = (count($map[$i])-$seats)+ 1;

        for($j=0; $j<(count($map[$i])-$seats + 1); $j++) {
         $place = $j +1;
         $reserve[] =  "Место $place";


            if($counter !== $seats) {

                if($map[$i][$j] === FALSE) {
                    $counter++;
                    //$reserve[] = "ряд:  $row, место: $place"; 

                } else {
                  
                   $counter=0;
                   $reserve =array();
                   
                }


            }else {

            	
                echo "$seats места забронированы:";

                if (isset($reserve)) {

             foreach ($reserve as $key => $value) {

               	echo $value;

                }

               }

               return $reserve;

            }

       }     

    }

}

groupReserve($map, 3);



?>




 
