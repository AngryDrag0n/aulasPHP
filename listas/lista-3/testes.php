<?php 
/* exercicio 1
    $num = 0;

    while($num < 10){
        $num++;
        echo $num . "\n";
    }
*/

/* exercicio 2 


$i = 1;
$soma = 0;
while ($i <= 10){
    $num = (int) readline("Digite valor $i: ");
    $soma = $num + $soma;
    $i++;
}

echo "a soma dos numeros é $soma \n e sua média é " . $soma/10 . ": \n"; 
*/

/* Exercicio 3  

    $quantidade = 0;
    $soma = 0;
    $media = 0;
    do{
        $a = readline("digite um valor: ");
        $quantidade ++;
        $soma += $a;
        $media = $soma / $cont;
        if($a == 0){
            $media = $soma / ($quantidade-1);
        }

    }while($a != 0);
    echo "a soma de todos os valores $soma\n";
    echo "a média entre os números foi de $media\n";
    echo "a quantidade de valores lidos foi de $quantidade\n";
*/

/* exercicio 4 
    $x = 50;
    $soma = 0;
    $media = 0;
    $quant = 0;

    while ($x <= 70){
        echo  $x . "\n";
        $soma += $x;
        $x += 2;

        $quant ++;

    }
        $media =$soma/$quant;
        echo "A soma dos valores é $soma e sua media é $media"
*/

/* exercicio 5 

$maior = PHP_INT_MIN; 
$menor = PHP_INT_MAX;

do {
    $a = readline("Digite um valor (se quiser encerrar digite 0): "); 
    if ($a != 0) {
        if ($a > $maior) {
            $maior = $a;
        }
        
        if ($a < $menor) {
            $menor = $a;
        }
    }

} while ($a != 0);

echo "O maior número digitado foi $maior\n";
echo "O menor número digitado foi $menor\n";*/

?>