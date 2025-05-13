<?php

  // Declare um vetor de 5 posições, receba 5 entradas do usuário e exiba os valores na tela.

  $vetor = array(); // Cria um array vazio

  for ($i = 0; $i < 5; $i++) {
    $vetor[$i] = readline("Informe um valor: ");
  }

  var_dump ($vetor);
  print_r ($vetor);
  // dd ($vetor); // mata a execução do programa

?>