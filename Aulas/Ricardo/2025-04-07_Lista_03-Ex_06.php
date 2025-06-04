<?php

  # Peça o nome de um feriado e use switch case para verificar se é nacional, estadual ou desconhecido.

  $feriado = trim(strtoupper(readline( "Informe o nome de um Feriado: \n")));
  $Arr_Nac = array("CONFRATERNIZAçãO UNIVERSAL", "SEXTA-FEIRA SANTA", "PáSCOA", "DIA DO TRABALHADOR", "CORPUS CHRISTIE", "INDEPENDÊNCIA", 
                   "NOSSA SENHORA APARECIDA", "FINADOS", "PROCLAMAÇÃO DA REPÚBLICA", "CONSCIÊNCIA NEGRA", "NATAL");

# echo $feriado;

  if (in_array($feriado, $Arr_Nac)) {
    echo "$feriado é um feriado é Nacional!";}
  else {
    echo "$feriado não foi localizado";}

?>