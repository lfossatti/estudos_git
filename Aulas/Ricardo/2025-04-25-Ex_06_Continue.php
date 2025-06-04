<?php

    # Informar um numero e totalizar os impares...
    
    $numero = readline("Informe um número qualquer: ");
    $impares = 0;
  
    for ($i=0; $i<$numero; $i++) {
      if (($i+1) % 2 == 0) {
        continue;
      } 
      $impares++;
    }
    echo "Total de impares é: $impares";

?>