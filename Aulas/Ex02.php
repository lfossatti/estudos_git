<?php
  # echo "Informe um número qualquer: ";
  $numero = readline("Informe um número qualquer: ");
  # $numero = fgets(STDIN); // STDIN = Standard Input

  if ($numero % 2 == 0) {
    echo "O número informado é par!";}
  else {
    # echo "O número informado é igual a 10!";
    fputs(STDOUT, "O número informado é impar!");}  // STDOUT = Standard Out = Video/tela
?> 