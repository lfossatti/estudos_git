<?php

$cpf = readline("Informe seu CPF no fomato XXX.XXX.XXX-YY: ");

if (strlen($cpf) <> 14){
  echo "Você informou um CPF diferente do padrão solicitado. Verifique! \n";
  return 0;
}
else {
  if (substr($cpf, 3, 1) <> "." || substr($cpf, 7, 1) <> "." || substr($cpf, 11, 1) <> "-") {
    echo "Separadores do CPF diferentes do padrão solicitado. Verifique! \n";
    return 0;
  }
  else {
    $cpf_num = preg_replace('/[^0-9]/', '', $cpf);
    if (strlen($cpf_num)!=11){
      echo "Tamanho do CPF diferentes do padrão solicitado. Verifique! \n";
      return 0;
    }
  }

  echo "O CPF informado é válido! \n";

  // Verificação com Assert
  $cpf = str_replace(".", "", $cpf);
  $cpf = str_replace("-", "", $cpf);
  assert(strlen($cpf)==11, "Número de digitos <> 11"); // a resposta ocorre se o CPF for <> 11 posições

}

?>