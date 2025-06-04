<?php
  # echo "Informe um número qualquer: ";
  $n1 = readline("Informe sua idade: ");
  
  # $numero = fgets(STDIN); // STDIN = Standard Input

  if ($n1 <= 12) {
    echo "Você é considerado(a) uma criança!";}
  else if ($n1 <= 17) {
    echo "Você é considerado(a) um(a) adolescente!";}
  else if ($n1 > 17) {
    echo "Você é considerado(a) um(a) adulto(a)!";}
  else { 
    # echo "O número informado é igual a 10!";
    fputs(STDOUT, "A idade informada é inválida!");}  // STDOUT = Standard Out = Video/tela
?> 