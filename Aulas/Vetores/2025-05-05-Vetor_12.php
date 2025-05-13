<?php

  // Crie um vetor de 8 posições e exiba apenas os valores impares e suas respectivas posições.

  $vetor = array(); // Cria um array vazio
  
  for ($i = 0; $i < 8; $i++) {      
    $vetor[$i] = rand(1,100);
  }
  
  print_r ($vetor);

  for ($i = 0; $i < 8; $i++) {      
    if ($vetor[$i] % 2 != 0) {
      echo "A posição $i possui um numero impar: " .$vetor[$i] ."\n";
    }
  }

?>