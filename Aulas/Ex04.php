<?php

  # echo "Informe um número qualquer: ";
  $n1 = readline("Informe um número qualquer: ");
  $n2 = readline("Informe outro número qualquer: ");
  $n3 = readline("Informe mais um número qualquer: ");

  # $numero = fgets(STDIN); // STDIN = Standard Input

  $maior;

  if ($n1 > $n2) {
    $maior = $n1;}
  else {
    $maior = $n2;}
  
  if ($n3 >= $maior) {
    echo "O  número " . $n3 . " é o maior!";}
  else { 
    # echo "O número informado é igual a 10!";
    fputs(STDOUT, "O  número " . $maior . " é o maior!");}  // STDOUT = Standard Out = Video/tela
?> 