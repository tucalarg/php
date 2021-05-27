<?php 

$nome = (int)$_GET["a"];

$sobrenome = (int)$_GET["b"];

//var_dump($nome);

//var_dump($sobrenome);

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;


?>