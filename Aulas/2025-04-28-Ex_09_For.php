<?php

    # Peça um número N e exiba os divisores de N usando for.
  
    $numero = readline("Informe um numero qualquer: ");
    $x = 1;
    $lista = "";

    for ($x=1; $x < $numero; $x++) {
      if ($numero%$x == 0) {
        // echo "O número informado é divisivel por: " .$x ."\n";
        //if (empty($lista)) {
        //  $lista = $x;}
        //else {
          $lista = $lista .$x ."; ";
        //}
      }
    }
    echo "O número informado é divisivel por: " .$lista ."\n";

?>