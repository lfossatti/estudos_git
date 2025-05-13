<?php

  # Verificação de entrada no cinema. livre, 12, 14, 16 ou 18 anos.

  $idade = readline( "Informe a sua idade: ");
  
  if (is_numeric($idade)) {
    if ($idade > 18) {
      echo "Você pode assistir filmes classificados como livre, 12, 14, 16, 18 anos";}
    else if ($idade >= 16) {
      echo "Você pode assistir filmes classificados como livre, 12, 14, 16 anos";}
    else if ($idade >= 14) {
      echo "Você pode assistir filmes classificados como livre, 12, 14 anos";}
    else if ($idade >= 12) {
      echo "Você pode assistir filmes classificados como livre, 12 anos";}
    else {
      echo "Você pode assistir apenas filmes livres";}
  }   
?>