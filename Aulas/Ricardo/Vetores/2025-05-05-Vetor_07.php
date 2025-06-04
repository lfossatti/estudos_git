<?php

  // Crie um vetor com 10 posições, preencha com valores e exiba os numeros na ordem inversa.

  $vetor = array(); // Cria um array vazio

  for ($i = 0; $i < 10; $i++) {
    $vetor[$i] = readline("Informe um valor: ");
  }

  for ($i = 9; $i >= 0; $i--) {
    echo "Os valores, na ordem inversa, são: " .$vetor[$i] ."\n";
  }

  $vetor_R = array_reverse($vetor);
  print_r ($vetor_R);

?>