<?php

//*
Exercício 60:
Lê a quantidade de habitantes, depois lê a idade de cada pessoa
e calcula a idade média.
*/

$habitantes = (int) readline("Digite a quantidade de habitantes: ");

$somaIdades = 0;

for ($i = 1; $i <= $habitantes; $i++) {
    $idade = (int) readline("Digite a idade do habitante $i: ");
    $somaIdades = $somaIdades + $idade;
}

$media = $somaIdades / $habitantes;

echo "Idade média: $media anos";

?>