<?php 

// tipos primitivos
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////////////////////////////////////

$frutas = array("abacaxi", "laranja", "manga"); // tipo composto array

//echo $frutas[2];

$nascimento = new DateTime(); // objeto

//var_dump($nascimento);

///////////////////////////////////////////////////////////// tipos especiais
$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL; // nula
$vazio = ""; // vazia

?>