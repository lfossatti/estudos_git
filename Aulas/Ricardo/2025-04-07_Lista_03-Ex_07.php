<?php

  # Peça as notas de Matemática e Português. O aluno só é aprovado se tiver nota > 7 nas 2 disciplinas.

  $NMat = readline( "Informe sua nota de Matemática: ");
  $NPor = readline( "Informe sua nota de Português: ");
  
  if ((is_numeric($NMat)) && (is_numeric($NPor))) {
    if (($NMat < 0 || $NMat > 10) || ($NPor < 0 || $NPor > 10)) {
      echo "A(s) nota(s) informada(s) é(são) incorreta(s)!";
    }
    else {
      if ($NMat >= 7 && $NPor >= 7) {
        echo "Parabéns, foi foi aprovado!";}
      else {
        echo "Você não alcançou a média necessária. Terá que repetir o ano!";}
    }
  }
  else {
    echo "As notas informadas não são válidas!";}
?>