<?php
  # echo "Informe um número qualquer: ";
  $vip = strtoupper(readline("Você está na lista Vip? Sim/Não "));
  $rest = substr($vip, 0, 1);
 echo $rest;
  # $numero = fgets(STDIN);cl // STDIN = Standard Input

  if ($rest != "S") {
    echo "Você não pode entrar nesta área do evento!";}
  else {
    fputs(STDOUT, "Bem vindo a área VIP!");}
      // STDOUT = Standard Out = Video/tela
?>