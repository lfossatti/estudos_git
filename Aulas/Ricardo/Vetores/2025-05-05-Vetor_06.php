<?php

  // Crie um vetor com 5 numeros reais, calcule a média aritmetica e mostre os numeros acima da média calculada.

  $vetor = array(); // Cria um array vazio
  $soma = 0;

  for ($i = 0; $i < 5; $i++) {
    $vetor[$i] = readline("Informe um numero: \n");
    $soma += $vetor[$i];
  }

  $media = $soma / 5;
  echo "A média é $media \n";

  for ($i = 0; $i < 5; $i++) {
    if ($vetor[$i] > $media) {
      echo "O menor numero " .$vetor[$i] ." é maior que a média $media \n";    
    }
  }
  
?>