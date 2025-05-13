<?php

  #  Leia um número e determine se ele é primo usando for.
    
  $numero = readline("Informe um numero qualquer: \n");
  $contador = 1;

  for ($x=2; $x <= $numero; $x++) {
    if ($contador < 3) {
      if ($numero % $x == 0) {
        $contador += 1;
      }
      continue;
    }
    break;
  };

  if ($contador == 2) {
    echo "<<< $numero é um numero primo! >>> \n";
  }
  else {
    echo "<<< $numero não é um numero primo! >>> \n";
  }
  
?>