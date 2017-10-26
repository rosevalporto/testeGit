<?php 

$frase = "a repetição é a mãe da retenção.";

$palavra = "da";

$q=strpos($frase, $palavra);
//var_dump($q);

echo "<br>";
$texto = substr($frase, 0, $q);
var_dump($texto);

echo "<br>";
$texto2 = substr($frase, $q+strlen($palavra), strlen($frase));
var_dump($texto2);

echo "<br>";
$teste3 = strlen($frase);
var_dump($teste3);


?>
