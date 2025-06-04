<?php

  // Leia 2 vetores de 5 posições e exiba um terceiro vetor com a soma dos vetores correspondentes.

  $vetor_1 = array(); // Cria um array vazio
  $vetor_2 = array(); // Cria um array vazio
  $vetor_Res = array(); // Cria um array vazio

  for ($i = 0; $i < 5; $i++) {      
    $vetor_1[$i] = readline("Informe um numero qualquer para V1: ");
  }

  for ($i = 0; $i < 5; $i++) {      
    $vetor_2[$i] = readline("Informe um numero qualquer para V2: ");
  }

  for ($i = 0; $i < 5; $i++) {
    $vetor_Res[] = $vetor_1[$i] + $vetor_2[$i];
  }
  
  print_r ($vetor_Res);

?>