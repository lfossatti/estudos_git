<?php

  # Peça q usuário insira notas de alunos até que ele insira uma nota negativa. Quando um numero negativo for inserido, o programa deve exibir a médias das notas...

  echo "Informe abaixo as notas do aluno: ";
  $notas = 0;
  $contador = 0;
  $numero = 0;

  do {
    $notas+= $numero; // $notas = $notas + $numero;
    $numero = readline( ", \n");
    if ($numero > 0) {
      $contador++;    
    }
  } while ($numero > 0);

  echo $notas ."\n";
  echo $contador ."\n";

  // $contador--;
  $media = $notas / $contador;
  echo "A média das notas informadas é: $media ";

?>