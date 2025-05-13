<?php

  # Peça um número N e exiba a soma dos quadrados dos números de 1 até N usando for.
    
  $numero = readline("Informe um numero qualquer: \n");
  $soma = 0;

  for ($x=1; $x <= $numero; $x++) {
    $soma += ($x * $x);
  };

  echo "<<< A soma dos quadrados de 1 até $numero é: $soma >>> \n";
  
?>