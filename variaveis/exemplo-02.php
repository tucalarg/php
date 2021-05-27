<?php

  $anoNascimento = 1990;

  $nomeCompleto = ""; //é case sensitive

  // na linha de baixo temos uma variável com número no nome
  $nome1 = "João";

  $sobrenome = "Rangel";

  $nomeCompleto = $nome1 . " " . $sobrenome; // concatenação

  echo $nomeCompleto;

  exit;

  echo $nome1;

  echo "<br/>";

  //unset($nome1); // destroi variáveis

  if (isset($nome1)){

  	echo $nome1;

  }

  


  /* nomes de variávels com erro
  $1nome = ""; erro 

  $%nome = ""; erro
  */

  //palavras reservadas
  //$this;



?>