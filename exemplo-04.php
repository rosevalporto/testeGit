<?php

$nome = "viviane";

function teste(){

global $nome;
echo $nome;

}

teste();


echo $nome."agora fora" ;

?>
