<?php
  echo "Informe um número qualquer: ";
  # $numero = readline();
  $numero = fgets(STDIN); // STDIN = Standard Input

  if ($numero >10) {
    echo "O número informado é maior do que 10!";}
  else if ($numero <10) {
    echo "O número informado é menor do que 10!";}
  else {
    # echo "O número informado é igual a 10!";
    fputs(STDOUT, "O número informado é igual a 10!");}  // STDOUT = Standard Out = Video/tela
?> 