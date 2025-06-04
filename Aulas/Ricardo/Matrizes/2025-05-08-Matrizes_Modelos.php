<?php

  // Leia 4 notas e calcule a média...

  $notas[0][0] = null; // Cria um array vazio
  $linhas = 3; // Cria um array vazio
  $colunas = 6; // Cria um array vazio

  // $notas[0][0] = "Pedro";
  // $notas[1][0] = "Antonio";
  // $notas[2][0] = "Carla";
  
  for ($i = 0; $i < $linhas; $i++) {
    $notas[$i][0] = readline("Informe o nome do aluno: \n");
    $media = 0;
    for ($j = 1; $j < ($colunas - 1); $j++) {
      $notas[$i][$j] = readline("Informe a nota $j do aluno " .$notas[$i][0] .": \n");
      $media += $notas[$i][$j];
    }
    $notas[$i][$j] = $media / ($j-1);
  }
  
  foreach ($notas as $linha) {
    foreach ($linha as $item) {
      echo "$item \t"; // tabula os dados
    }
    echo "\n"; // pula linha
  }

  print_r ($notas);

?>