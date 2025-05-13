<?php

  // Crie um vetor de 10 numeros, solicite um valor X e exiba se X aparece no vetor.

  $numero = readline("Informe um numero de 1 a 100 para ver se existe no vetor: ");
  $vetor = array(); // Cria um array vazio
  $found = false;
  
  for ($i = 0; $i < 10; $i++) {      
    $vetor[$i] = rand(1,100);
    if ($vetor[$i] == $numero) {
      $found = true;  
    };
  }
  
  print_r ($vetor);
  if ($found == true){
    echo "O numero $numero está presente no vetor \n";
  }
    else {
    echo "O numero $numero não está presente no vetor \n";
  }
  
?>