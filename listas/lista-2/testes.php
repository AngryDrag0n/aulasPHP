<?php 
/* exercicio a
    $num = readline("Digite um numero: ");
    
    if($num > 10){

        echo "$num é maior que 10\n";
    } else {

        echo "$num não é maior que 10 \n";
    }

*/

/* exercicio b 

    $num = readline("Digite o numero: ");

    if($num < 0){
        echo "este numero é negativo\n";
    } else {
        echo "este numero é positivo\n";
    }
*/ 

/* exercicio c 

    $maca = readline("Quantas maçãs você comprou? ");

    if($maca < 12){
        $valor = $maca*1.30;
        echo "o total de maçãs deu: $valor";
    } elseif ($maca > 12){
        $valor = $maca*1.00;
        echo "O total de maçãs deu: $valor";
    }
*/
/*exercicio d 

    $n1 = readline("Qual foi a primeira nota: ");
    $n2 = readline("qual foi a segunda nota: ");

    $media = ($n1 + $n2)/2;

    if($media >= 60){
        echo "o aluno foi aprovado com média $media \n";
    } else {
        echo "o aluno foi reprovado com media $media \n";
    }
*/

/* exercicio e 

    $idade = readline("qual a sua idade? ");

    if($idade >= 16){
        echo "você já pode votar \n";

        if($idade >= 18){
            echo "você já pode fazer carteira CNH \n";
        } else {
            echo "Mas não pode fazer carteira CNH \n";
        }
    } else {
        echo "não pode votar e nem fazer carteira CNH \n";
    }
*/ 

/* exercicio f 
    $num1 = readline("qual o primeiro valor? ");
    $num2 = readline("Qaul o segundo valor? ");

    if ($num1 > $num2){
        echo "$num1 é maior que $num2";
    } else {
        echo "$num2 é maior que $num1";
    }
*/

/* exercicio g 

    $idade = (int) readline("qual a sua idade? ");

    $nivel = match ($idade) {
        5, 6, 7 =>  "Você é nivel infantil A",
        8, 9, 10=>  "Você é nivel infantil B",
        11, 12, 13=> "você é nivel juvenil A",
        14, 15, 16 ,17=> "voce é nivel Juvenil B",
        default => "Nivel Sênior"
    };

    echo $nivel

*/

/* exercicio h 

    $valorEtiqueta = readline("qual o valor da etiqueta: ");
    echo "\n Escolha umas das 4 opções: ";
    echo "\n 1. À vista em dinheiro com 10% de desconto ";
    echo "\n 2. À vista no cartão com 5% de desconto. ";
    echo "\n 3. Em 2 vezes, preço normal da etiqueta. ";
    echo "\n 4. Em 3 vezes, preço normal da etiqueta com juros de 10%. \n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $novoValor = $valorEtiqueta - $valorEtiqueta *0.1;
            echo $novoValor;
            break;
        
        case 2:
            $novoValor = $valorEtiqueta - $valorEtiqueta *0.05;
            echo $novoValor;
            break;
        
        case 3:
            $novoValor = $valorEtiqueta /2;
            echo $novoValor;
            break;
        
        case 4:
            $novoValor = $valorEtiqueta + $valorEtiqueta * 0.1;
            echo $novoValor;
            break;
        default:
            echo "tente novamente";
            break;
    }
*/

/*exercicio i

    $num = readline("digite um número: ");
    
    if(($num > 30  && $num < 90) || $num > 120){
        echo "$num está entre 30 e 90 ou é maior que 120";
    } else { 
        echo "$num não se aplica a nenhuma condição";
    }
*/

/* exercicio j 
    $valor = readline("Qual o valor do produto? ");

    if($valor <= 20){
        $novoValor = $valor + $valor*0.45;
        echo "o novo valor é de $novoValor";
    } elseif ($valor >= 20){
        $novoValor = $valor + $valor*0.3;
        echo "o novo valor é de $novoValor";
    }
*/
?>