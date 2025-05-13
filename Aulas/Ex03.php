<?php
  # echo "Informe um número qualquer: ";
  $n1 = readline("Informe um número qualquer: ");
  $n2 = readline("Informe outro número qualquer: ");

  # $numero = fgets(STDIN); // STDIN = Standard Input

  if ($n1 > $n2) {
    echo "O primeiro número informado é maior do que o segundo!";}
  else { 
    # echo "O número informado é igual a 10!";
    fputs(STDOUT, "O segundo número informado é maior do que o primeiro!");}  // STDOUT = Standard Out = Video/tela
?> 