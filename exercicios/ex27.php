<?php 

    $arr = [5, "matheus", true, false, "opa", 12.8, 'teste', true, [], "paladino"];

    $x = count($arr);
    $y = 0;

    while($y <= $x){

        if(is_string($arr[$y])){
            
            echo $arr[$y] . "\n";
        }

        $y++;
    }

?>