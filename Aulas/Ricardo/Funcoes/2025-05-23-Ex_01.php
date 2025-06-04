<?php

// Somar passando os parametros
function somar($a, $b) {
  return $a + $b;
}

echo "Parametro: " .somar(1,1) ."\n";


// Somar por referencia
function somar_ref($a, $b, &$res) {
  $res = $a + $b;
}

echo somar_ref(1,2,$result);
echo "Referencia: " .$result ."\n";

print_r(str_split("passando com parametro de separacao 2", 2));
print_r(str_split("passando sem parametro de separacao"));

?>