<?php 

    function teste($a = "teste") {
        echo "o valor de A é: $a <br>";
    }

    
    teste();
    teste("asd");

    function testando( $b, $c = "x" ){
        echo "O valor de A é $c e b é $b <br>";
    }

    testando("1");
    testando("1", "asd");


?>