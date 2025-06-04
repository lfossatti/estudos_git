<?php

  # Sorteio de um numero que o usuário tem a aceitar
  $aleatorio = rand(0,20);
  echo $aleatorio;
  $palpite = readline( " Digite um numero de 1 a 20: ");
  
  while ($aleatorio != $palpite) {
    $palpite = readline( "Você errou! Digite um novo palpite: ");
    // $x++; //$x = $x + 1; // $x++ ou $x+=1
    }

    echo "Parabéns, você acertou! \n";
?>