<?php

$nome = "hcode";
$site = 'www.hcode.com';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;
//////////////////////
//array 

$frutas= array("abacaxi","laranja", "manga");
//como chamar um array 
echo $frutas[2];
//objeto - com "new"
$nascimento = new DateTime();
var_dump($nascimento);


/////////////////////////
// arquivo
$arquivo = fopen("exemplo-01.php", "r");

var_dump($arquivo);

//////////////////////
//variavel null - ausencia de valor 
//variavel vazio - tem espaco na memoria 
$nulo = null;
$vazio = " ";


?>