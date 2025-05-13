<?php

  // Crie um vetor com 10 numeros e exiba apenas os pares armazenados.

  $vetor = array(); // Cria um array vazio

  for ($i = 0; $i < 10; $i++) {
    $vetor[$i] = readline("Informe um valor: ");
  }

  for ($i = 0; $i < 10; $i++) {
    if ($vetor[$i] % 2 == 0) {
      echo "o numero $vetor[$i] é par\n";
    }
  }

?>