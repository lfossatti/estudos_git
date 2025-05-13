<?php

  # Leia um número e informe se ele é positivo, negativo ou zero usando do...while

  $numero = readline("Informe um numero qualquer: ");
  if (!is_numeric($numero)) {
    echo "O valor informado inválido! \n";  
  }

  do {
    if ($numero > 0){
      echo "Você informou um numero positivo! \n";
      break;   
    }
    elseif ($numero < 0){
      echo "Você informou um numero negativo! \n";   
      break;
    }
    else {
      echo "Você informou o numero zero! \n";
      break;  
    }
  } while (true);

?>