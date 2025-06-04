<?php
  # echo "Informe um número qualquer: ";
  $n1 = readline("Informe um número qualquer: ");
  $n2 = readline("Informe outro número qualquer: ");
  
  # $numero = fgets(STDIN); // STDIN = Standard Input

  if ($n1 == $n2) {
    echo "Os números informados são iguais!";}
  else { 
    # echo "O número informado é igual a 10!";
    fputs(STDOUT, "Os números informados são diferentes!");}  // STDOUT = Standard Out = Video/tela
?> 