<?php

  // Solicite 5 nomes e exiba na ordem que foram digitados.

  $vetor = array(); // Cria um array vazio

  for ($i = 0; $i < 5; $i++) {
    $vetor[$i] = readline("Informe um nome: ");
  }

  sort ($vetor); // ordenar alfabetico..
  print_r ($vetor);

?>