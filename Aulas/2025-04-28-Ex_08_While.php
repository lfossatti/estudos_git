<?php

    # Solicite um número e exiba a soma de seus dígitos usando while.
  
    $numero = readline("Informe um numero qualquer: ");
    $digitos = (strlen($numero));
    $soma = 0;
    
    while ($digitos > 0) {
      // echo "Recorte: " .substr($numero, $digitos-1, 1) ."\n";
      $soma+= substr($numero, $digitos-1, 1);
      $digitos--;
    }
    echo "A soma dos digitos do numero informado é: " .$soma;

?>