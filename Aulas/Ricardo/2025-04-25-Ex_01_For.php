<?php

  # Peça ao usuário para inserir um numero e exibir os numeros até N

  $numero = readline("Informe um numero qualquer: ");
  $contador = 0;

  echo "Utilizando While \n";
  while($contador < $numero) {
    echo "O numero neste momento é: " .($contador + 1)  ."\n";
    $contador++;
  }

  // $i = Contador... não precisa declarar antes, pode inicializar dentro do for...
  echo "Utilizando for \n";
  for($i=0; $i<$numero; $i++) {
  echo "O número neste momento é: " .($i + 1) ."\n";
  }
?>