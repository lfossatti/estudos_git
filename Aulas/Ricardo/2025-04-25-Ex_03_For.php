<?php

  # Peça ao usuário para inserir um numero. O programa deve exibir todos os numeros pares até N

  $numero = readline("Informe um numero qualquer, para verificarmos a sequencia dos numeros pares: ");
  
  // $i = Contador... não precisa declarar antes, pode inicializar dentro do for...
    for($i=0; $i<$numero; $i++) {
      if (($i+1)%2 == 0) { 
        echo "O número neste momento é par: " .$i+1 ."\n";
      }
  }

?>