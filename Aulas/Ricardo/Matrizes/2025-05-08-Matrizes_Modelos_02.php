<?php

  // Criar um programa que armazene a temperatura durante uma semana em 3 perídos... o programa deve:
  // * Ler as temperaturas e armazená-las em uma matriz;
  // * Calcular a média de temperatura para cada dia da semana;
  // * Determinar o dia mais quente da semana, considerando a maior média diária;
  // * Exibir a matriz completa, as médias diárias e o dia mais quente.

  $temperatura[0][0] = null; // Cria um array vazio
  $linhas = 7; // Cria um array vazio
  $colunas = 5; // Cria um array vazio

  $temperatura[0][0] = "Domingo: ";
  $temperatura[1][0] = "Segunda: ";
  $temperatura[2][0] = "Terça..: ";
  $temperatura[3][0] = "Quarta.: ";
  $temperatura[4][0] = "Quinta.: ";
  $temperatura[5][0] = "Sexta..: ";
  $temperatura[6][0] = "Sábado.: ";
  
  $medias[7][2] = null; // Cria um array vazio
  $quente = array(null,0);

  for ($i = 0; $i < $linhas; $i++) {
    $media = 0;
    for ($j = 1; $j < ($colunas - 1); $j++) {
      $temperatura[$i][$j] = readline("Informe a temperatura $j da " .$temperatura[$i][0] ." \n");
      $media += $temperatura[$i][$j];
    }
    $temperatura[$i][$j] = $media / ($j-1);

    $medias[$i][0] = $temperatura[$i][0];
    $medias[$i][1] = $media / ($j-1);

    if ($quente[1] <= ($media / ($j-1))){
      $quente[0] = $temperatura[$i][0]; 
      $quente[1] = ($media / ($j-1)); 
    }
  }

  echo "A matriz completa das temperaturas é: \n";
  
  foreach ($temperatura as $linha) {
    foreach ($linha as $item) {
      echo "$item \t"; // tabula os dados
    }
    echo "\n"; // pula linha
  }

  echo "\n A média das temperaturas por dia da semana é:";

  foreach ($medias as $linha) {
    foreach ($linha as $item) {
      echo "$item \t"; // tabula os dados
    }
    echo "\n"; // pula linha
  }

  echo "O dia mais quente da semana foi " .$quente[0] ." com temnperatura de " .$quente[1] ."º "

  // print_r ($temperatura);

?>