<?php

  // Crie um vetor de 10 numeros, solicite um valor X e exiba quantas vezes X aparece no vetor.

  $numero = readline("Informe um numero para procurar no vetor: ");
  $vetor = array(); // Cria um array vazio
  $qtde = 0;
  
  for ($i = 0; $i < 10; $i++) {      
    $vetor[$i] = rand(1,100);
    if ($vetor[$i] == $numero) {
      $qtde ++;
    };
  }
  
  print_r ($vetor);
  echo "O numero $numero apareceu $qtde vezes no vetor \n";
  
?>