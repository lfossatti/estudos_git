<?php

  // Solicite 5 notas de um aluno e exiba a mais alta e a mais baixa.

  $vetor = array(); // Cria um array vazio
  for ($i = 0; $i < 5; $i++) {      
    $vetor[$i] = readline("Informe uma nota: ");
  }
  
  print_r ($vetor);
  echo "O menor nota informada foi: " .min($vetor) ."\n";
  echo "O maior nota informada foi: " .max($vetor) ."\n";
  
?>