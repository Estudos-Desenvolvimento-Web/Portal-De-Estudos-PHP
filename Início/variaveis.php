<?php 
 //para se declarar uma vriável precisa sempre começar com $ exemplo:
$br = "<br>";
$a = "BOLA";
echo $a;
echo $br;
// o PHP é uma linguagem fracamente tipada então você não precisa declarar no código
//que tipo de variavel como no Java, a partir do momento que colocar $, você já chama uma váriavel de
//todos os tipos com exceções as escritas
//nunca declare variaveis como nomes estranhos pois isso haverá problemas no seu código lá na frente
//tipos
$inteiro = 1;
$array = [1, 2, 3, 4, 5];
$float = 4.5;
$double = 4.555;
$String = "Bola";
$templateString = '$String , $inteiro, bola';

echo $inteiro, $array, $float, $double, $String, $templateString;

?>
