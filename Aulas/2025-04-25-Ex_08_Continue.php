<?php

    # Crie um programa que percorra os numeros de 1 a 10. Se o numero for impar, pule. Se for par, imprima...
    for ($i=1;$i<=10;$i++){
        if ($i % 2 != 0){
            continue;
        }
        echo "O número $i é par. \n";
    }

?>