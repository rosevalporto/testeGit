<?php 

$nome ="hcode treinamentos";
$nome2= 'treinamentos';

//var_dump($nome, $nome2);
//echo 'Abc $nome';

echo strtoupper($nome);
echo "<br>";
echo strtolower($nome);
echo "<br>";
echo ucwords($nome);
echo "<br>";
echo ucfirst($nome);
echo "<br>";

$nome = str_replace("o","0", $nome);
$nome = str_replace(e,1, $nome);
$nome = str_replace("a","3", $nome);
echo $nome;

?>
