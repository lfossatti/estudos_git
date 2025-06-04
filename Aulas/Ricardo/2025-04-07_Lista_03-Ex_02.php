<?php

  # Receba uma letra e informe se ela é vogal ou consoante

  $vogal = strtoupper(trim(readline( "Informe uma letra: ")));  

  if (ctype_alpha($vogal)) {

    switch ($vogal) {
      case "A":
        echo "A letra $vogal é vogal";
        break;
      case "E":
        echo "A letra $vogal é uma vogal";
        break;
      case "I":
        echo "A letra $vogal é uma vogal";
        break;
      case "O":
        echo "A letra $vogal é uma vogal";
        break;
      case "U":
        echo "A letra $vogal é uma vogal";
        break;
      default:
        echo "A letra $vogal é uma consoante!";
        break;}
      }
    else {
      echo "Você informou um caracter inválido!";}
?>