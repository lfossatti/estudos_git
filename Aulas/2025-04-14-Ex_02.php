<?php

  # Tabuada que multiplica um numero até
  $num = readline( "Digite um número positivo: ");
  $limite = readline( "Digite o limite da tubuada: ");
  $x = 1;

  while ($x <= $limite) {
    $num_mult = $num * $x;
    echo "O número $num multiplicado por $x é: $num_mult \n";
    // $x++; //$x = $x + 1; // $x++ ou $x+=1
    $x = $x + 1;
    }
?>