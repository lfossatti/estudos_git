<?php

  # Receba 2 números, diga se são iguais, diferentes ou se um é multiplo do outro.

  $cpf = readline("Informe um CPF[xxxxxxxxxxx]: ");

  $cpf = str_replace(".", "", $cpf);
  $cpf = str_replace("-", "", $cpf);

  if (ctype_digit($cpf)) {
 
    If (strlen($cpf) == 11) {
      echo "CPF com 11 digitos!";}
    else {
      echo "CPF é inválido!";}
    }
  else {
    echo "Entrada inválida!";}
?>