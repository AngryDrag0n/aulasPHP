<?php 

    function numero($numero){
        if (($numero % 2) === 0){
            echo "$numero é par \n";
        } else {
            echo "$numero é impar \n";
        }
        
    }
    numero(8);
    numero(7);
    numero(10);
    numero(717);

?>