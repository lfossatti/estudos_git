<?php

  # Solicite ao usuário dois números A e B e exiba todos os números no intervalo [A, B] usando while.

  $n1 = readline("Informe um número:  \n");
  $n2 = readline("Informe outro número:  \n");
  $x = 0;
  $nTemp = 0;

  if ($n1 < $n2) {
    $x = $n1 + 1;
    $nTemp = $n2;
  }
  else {
    $x = $n2 + 1;
    $nTemp = $n1;
  }

  while ($x < $nTemp) {
    echo "<<< Número atual: $x >>> \n";  
    $x++;
  }

?>