<?php

  # Percorrer uma lista com 30 numeros e sair do laço quando encontrar um numero divisível por 7
  
  for ($i=1;$i<=30;$i++){
    if ($i % 7 == 0){
        echo "O número $i é divisível por 7. \n";
        break;
    }
    
  }

?>