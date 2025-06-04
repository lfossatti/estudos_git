<?php

  # Sorteio de um numero que o usuário tem a aceitar
  
  echo "Advinhe o numero! \n";  
  $aleatorio = rand(0,10);
  
  while (true) {
    $palpite = readline( "Digite um numero: ");
    if ($palpite == $aleatorio) {
      echo "Parabéns, você acertou! \n";
      break;
    }
  }

?>