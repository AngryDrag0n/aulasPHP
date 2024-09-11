<?php 

    function soma($a, $b, $c, $f, $d){
        print_r(func_get_args()) . "<br>";
         echo  "<br>";
        echo print_r(func_num_args ()) . "<br>";


        return $b + $a;
    }

    SOMA(2, 4, 6, 7, 9,8, 5, 0 )

?>