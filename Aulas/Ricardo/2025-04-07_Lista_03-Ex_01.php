<?php

  # receba um numero e informe se ele é multiplo de 3 e 5

  $num = readline("Digite um numero: ");
  
  if ($num%3==0 && $num%5 == 0) {
    echo "O número informado é multiplo de 3 e 5!";}
  else {
    echo "O número informado não é multiplo de 3 e 5!";
  }
  
?>