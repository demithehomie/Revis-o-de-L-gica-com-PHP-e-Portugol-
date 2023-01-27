<?php
//include 'math.php';

function inicio() {
    $nome = "";
    $nota1 = 0;
    $nota2 = 0;
    $nota3 = 0;
    $media = 0;

    echo "Digite seu nome: "; // Pedir nome
    $nome = readline(); // Ler o que o usuário digitar

    echo "\n"; // Pula linha
    echo "Digite a primeira nota: ";
    $nota1 = readline();

    echo "Digite a segunda nota: ";
    $nota2 = readline();

    echo "Digite a terceira nota: ";
    $nota3 = readline();

    /* Calcula a média final do usuário */
    $media = ($nota1 + $nota2 + $nota3) / 3;

    //clear();

    if ($media >= 6) {
        echo "Parabéns ", $nome, "!\nVocê foi aprovado com a média ", round($media, 2);
    } else {
        echo "Que pena ", $nome, "!\nVocê foi reprovado com a média ", round($media, 2);
    }

    echo "\n";
}
inicio();