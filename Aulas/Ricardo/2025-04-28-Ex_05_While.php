<?php

  # Solicite um número N e exiba a contagem regressiva de N até 1 usando while.

  $numero = readline("Informe um numero qualquer: ");
  
  do {
    echo "Contagem regressiva: ". $numero-- ."\n";
  } while ($numero > 0);

?>