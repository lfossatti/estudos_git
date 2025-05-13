<?php

  # Receba 2 números, diga se são iguais, diferentes ou se um é multiplo do outro.

  $num1 = readline("Digite o primeiro número: ");
  $num2 = readline("Digite o segundo número: ");

  if ((ctype_digit($num1)) && (ctype_digit($num2))) {
    if ($num1 == $num2) {
      echo "Os números $num1 e $num2 são iguais!";}
    else {
      if ($num1%$num2 == 0 || $num2%$num1 == 0) {
        echo "os números $num1 e $num2 são múltiplos!";}
      else {
        echo "Os números $num1 e $num2 são diferentes e não são multuplos entre si!";}
    }}
  else {
    echo "Entrada inválida!";}
?>