<?php

  # Peça ao usuário que informe um numero positivo e continue pedindo até que o numero seja positivo...
    
  echo "Informe um número positivo: \n";
  
  do {
    $numero = readline( ", \n");
  } while ($numero < 0);

  echo "<<< Número positivo informado! >>> \n";
  
?>