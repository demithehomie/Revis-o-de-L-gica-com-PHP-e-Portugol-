<?php

function inicio() {
    $opcao;
    
    echo("1) Elogio \n");
    echo("2) Ofensa \n");
    echo("3) Sair \n\n");
    
    echo("Escolha uma opção: ");
    $opcao = readline();
    
    switch($opcao) {
        case 1: 
            echo("Voce é lindo(a)!");
            break;
        case 2:
            echo("Voce é um monstro(a)!");
            break;
        case 3:
            echo("Tchau!");
            break;
        default:
            echo("Opção Inválida !");
    }
    
    echo("\n");
}

inicio();

?>