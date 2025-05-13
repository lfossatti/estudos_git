<?php

    # Crie um programa que percorra os numeros de 1 a 50. Se o numero não for multiplo de 5, o laço deve ignorar... senão, imprima...
    
    for ($i=1;$i<=50;$i++){
        if ($i % 5 != 0){
            continue;
        }
        echo "O número $i é multiplo de 5. \n";
    }
    
?>