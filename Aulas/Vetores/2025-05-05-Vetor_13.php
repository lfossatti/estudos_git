<?php

  // Peça 10 numeros e exiba apenas os valores únicos, sem repetição.

  $vetor = array(); // Cria um array vazio

  for ($i = 0; $i < 10; $i++) {      
    $vetor[$i] = readline("Informe um numero qualquer: ");
  }

  $vetor_U = "";
  $buscar = "";
  $posicao = "";
  $found = false;
  for ($i = 0; $i < 10; $i++) {
    $buscar = $vetor[$i];
    $posicao = $i;
    $found = false;
    // echo "Inicio Found: $found \n";

    for ($y = 0; $y < 10; $y++) {
      // echo "Posição: $posicao \n";
      // echo "Y: $y \n";
      if ($y != $posicao) {
        // echo "Vetor y: $vetor[$y] \n";
        // echo "Vetor i: $vetor[$i] \n";
        if ($vetor[$y] == $vetor[$i]) {
          // echo "Entrei Vetor y = Vetor i \n";
          $found = true;
        }
      }
    }
    // echo "Found: $found \n";
    if ($found != true) {
      // echo "Encontrei: $buscar \n";
      $vetor_U = $vetor_U .$buscar  ."; ";
    }

/*    if ($i == 0) {
      $vetor_U[0] = $vetor[$i];    
    }
    else {
      for ($y = 0; $y < count($vetor_U); $y++) {
        if ($vetor_U[$y] == $vetor[$i]) {
          $found = true;
        }
      }
      if ($found == false) {
        $vetor_U[count($vetor_U)] = $vetor[$i];
      }
    } */
  } 
  
  // $vetor_U = array_unique($vetor);
  echo "Os numeros que não se repetem são: $vetor_U \n";

  // Outra forma de fazer... //
  //for ($i = 0; $i < 10; $i++) {      
  //  $vetor[$i] = readline("Informe um numero qualquer: ");
  //}
  
  $vt = $vetor; // [2, 1, 2, 3, 3, 5, 4, 6, 6, 10];
  print_r ($vt);
  $count = array_count_values($vt);
  print_r ($count);
  $unicos = [];

  echo "Tamanho: " .count($vt) ."\n";

  for ($x = 0; $x < count($vt); $x++) {
    if ($count[$vt[$x]] === 1) {
      $unicos[] = $vt[$x];
    }
  }
 
  print_r($unicos);

  $unicos = [];
  foreach ($count as $key => $value) {
    if ($value === 1) {
      $unicos[] = $key;
    }
  }
  
  print_r($unicos)

?>