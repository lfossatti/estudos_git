<?php

  # Verificação de entrada no cinema. livre, 12, 14, 16 ou 18 anos.
  $num = readline( "Digite um número positivo: ");
  $x = 1;

  while ($x <= $num) {
    echo "O número atual é: $x \n";
    $x++; //$x = $x + 1; // $x++ ou $x+=1
    }
?>