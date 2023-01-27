<?php

function inicio() {
    $a;
    $b;
    $aux;
    
    echo("Informe um valor para a variável A: ");
    $a = readline();
    
    echo("Informe um valor para a variável B: ");
    $b = readline();
    
    echo("Variáveis antes da troca: \n");
    echo("A = " . $a . "; B = " . $b . "\n");
    
    $aux = $a;
    $a = $b;
    $b = $aux;
    
    echo("\n");
    
    echo("Variáveis após a troca: \n");
    echo("A = " . $a . "; B = ". $b. "\n");
}

inicio();

?>