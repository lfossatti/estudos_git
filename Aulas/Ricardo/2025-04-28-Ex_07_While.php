<?php

    # Peça números ao usuário até que ele insira 0, então exiba a quantidade de números digitados.
  
    $Qtde = 0;

    do {
      $numero = readline("Informe um numero qualquer: ");
      if (!is_numeric($numero)) {
        echo "O valor informado inválido! \n";
        continue;  
      }
      $Qtde++;
    } while ($numero != 0);
    
    echo "Você digitou $Qtde vezes até digitar 0";

?>