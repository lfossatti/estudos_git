<?php

  # Solicite um número e exiba seus fatores primos usando while.
  # Verificar se o numero q divide é primo, caso sim, adicionar a lista...

  $numero = readline("Informe um número:  \n");
  $lista = "";
  $x = $numero;
  $y = 0;
  $contador = 0;

  for ($i = 3; $i < $numero; $i+=2) {
    if ($numero % $i == 0) {
      $contador = 1;
      for ($y = 2; $y <= $x, $y++) {
        if ($x % $y == 0) {
          $contador ++
        }
        if ($contador = 2) {
          $lista += $x . "; "    
          continue
        }
      }
    }
        
    
    
    
    $fatores += $x;
    echo "<<< Número atual: $x >>> \n";  
    $x++;
  }

  if ($n1 < $n2) {
    $x = $n1 + 1;
    $nTemp = $n2;
  }
  else {
    $x = $n2 + 1;
    $nTemp = $n1;
  }

?>