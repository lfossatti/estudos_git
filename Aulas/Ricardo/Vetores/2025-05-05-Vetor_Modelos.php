<?php

  // Um aluno com 10 notas...
  $notas = readline("Informe a qtde de nota do aluno: ");
  $vetor = array(); // Cria um array vazio
  //$vetor2 = array([1,2,5,"teste"]); // Cria com valores
  // var_dump ($vetor); -> mostra todas as variáveis dentro array...
  // var_dump ($vetor2);
  // echo $vetor2[3][2]; // pega o elemento 3 e conta a posição 2...

  for ($indicador = 0; $indicador < $notas; $indicador++) {
    $vetor[$indicador] = readline("Informe uma nota: ");
  }

  $media = 0;
  for ($indicador = 0; $indicador < $notas; $indicador++ ) {
    $media += $vetor[$indicador];
  }

  if (($media/$notas) >=7){
    echo "Aprovado\n";
  }
  else if (($media/$notas) >= 5 || ($media/$notas) < 7) {
    echo "Em recuperação\n";
  }
  else {
    echo "Reprovado\n";  
  }
 
?>