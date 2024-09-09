<?php 

    $x = 10; 
    function testeEscopo(){

        $x = 5;

        echo "ESCOPO LOCAL de x: $x \n";


    }

    echo "ESCOPO GLOBAL de x: $x \n";

    testeEscopo();
?>