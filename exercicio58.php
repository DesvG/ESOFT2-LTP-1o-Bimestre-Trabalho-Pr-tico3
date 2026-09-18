<?php

//*
Exercício 58:
Lê uma letra e verifica se ela é uma vogal maiúscula,
uma vogal minúscula ou uma consoante.
*/

$letra = readline("Digite uma letra: ");

if ($letra == "A" || $letra == "E" || $letra == "I" || $letra == "O" || $letra == "U") {
    echo "Vogal maiúscula";

} elseif ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
    echo "Vogal minúscula";

} else {
    echo "Consoante";
}

?>