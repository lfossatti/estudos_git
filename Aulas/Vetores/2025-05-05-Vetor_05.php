<?php

  // Preencha um vetor com 10 posições aleatórios entre 1 e 100 e exiba o maior e menor numero encontrados.

  $vetor = array(); // Cria um array vazio

  for ($i = 0; $i < 10; $i++) {
    $vetor[$i] = rand(1,100);
  }

  print_r ($vetor);
  echo "O menor numero sorteado foi: " .min($vetor) ."\n";
  echo "O maior numero sorteado foi: " .max($vetor) ."\n";

?>