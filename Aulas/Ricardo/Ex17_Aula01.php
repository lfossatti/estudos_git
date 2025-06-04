<?php

  # Receba um numero de 2 digitos e inverta o numero

  # echo "Informe um número qualquer: ";
  $numero = readline("Informe um número qualquer: ");
  # $numero = fgets(STDIN); // STDIN = Standard Input
  $n1 = ($numero % 10);
  $n2 = (($numero - $n1) / 10);
  $n1 = ($n1 * 10);
  $numero = $n1 + $n2;

  fputs(STDOUT, "O número informado é:  $numero");  // STDOUT = Standard Out = Video/tela
?> 