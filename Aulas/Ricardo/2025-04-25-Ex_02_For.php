<?php

  # Peça ao usuário para inserir um numero e exibir a soma dos numeros até N

  $numero = readline("Informe um numero qualquer: ");
  
  // $i = Contador... não precisa declarar antes, pode inicializar dentro do for...
  $soma = 0;
  for($i=0; $i<$numero; $i++) {
    $soma += $i + 1; // += preserva e adiciona...
    echo "O número neste momento é: " .$soma ."\n";
  }

?>