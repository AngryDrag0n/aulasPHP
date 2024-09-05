<?php 

    $x = 4; 
    $limite = 30;

    while($x <= $limite){
        echo $x . "\n";
        $x += 2;

        if($x === 24){
            echo "Parando o loop";
            break;
        }
    }

?>