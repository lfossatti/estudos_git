<?php

  // Leia um vetor de 10 numeros e informe quantos são positivos e quantos são negativos.

  $vetor = array(); // Cria um array vazio
  $pos = 0;
  $neg = 0;

  for ($i = 0; $i < 10; $i++) {      
    $vetor[$i] = readline("Informe um numero qualquer: ");
    if ($vetor[$i] < 0) {
        $neg ++;
      } 
      else {
        $pos ++;  
      };
  }
  
  print_r ($vetor);
  echo "Foram informados $pos numeros positivos \n";
  echo "Foram informados $neg numeros negativos \n";
  
?>