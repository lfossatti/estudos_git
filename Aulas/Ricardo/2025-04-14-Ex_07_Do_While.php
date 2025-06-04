<?php

  # Peça ao usuário que informe um numero positivo e faça o decrescimo dele...
    
  $numero = readline("Informe um número qualquer: ");
  
  do {
    if ($numero > 1) {
      echo "Restam $numero números. \n";}
    else {
      echo "Resta $numero número. \n";}
    $numero--;
  } while ($numero > 0);
  
?>