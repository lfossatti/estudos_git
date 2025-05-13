<?php

  // Peça ao usuário 5 numeros inteiros, armazene-os em vetor e mostre a soma.

  $vetor = array(); // Cria um array vazio

  $soma = 0;
  for ($i = 0; $i < 5; $i++) {
    $vetor[$i] = readline("Informe um valor: ");
    $soma += $vetor[$i];
  }

  echo "A soma dos números é $soma \n";

?>