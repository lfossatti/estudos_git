<?php

  # Leia números inteiros até que o usuário digite um número negativo, então exiba a soma dos valores lidos.

  echo "Informe um número inteiro e positivo: \n";
  $soma = 0;
  
  do {
    $numero = readline( ", \n");
    if ($numero > 0) {
      $soma += $numero; // += preserva e adiciona...
    } 
  } while ($numero > 0);

  echo "<<< Número negativo informado! >>> \n";
  echo "A soma dos numeros informados é: " .$soma ."\n";

?>