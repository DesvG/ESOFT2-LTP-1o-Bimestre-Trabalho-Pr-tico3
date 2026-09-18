<?php

//*
Exercício 59:
Lê o ano de nascimento e o ano atual, calcula a idade
e informa a categoria do nadador.
*/

$anoNascimento = (int) readline("Digite o ano de nascimento: ");
$anoAtual = (int) readline("Digite o ano atual: ");

$idade = $anoAtual - $anoNascimento;

if ($idade <= 4) {
    echo "Categoria: Não aceito";

} elseif ($idade <= 7) {
    echo "Categoria: Infantil A";

} elseif ($idade <= 10) {
    echo "Categoria: Infantil B";

} elseif ($idade <= 13) {
    echo "Categoria: Juvenil A";

} elseif ($idade <= 17) {
    echo "Categoria: Juvenil B";

} else {
    echo "Categoria: Sênior";
}

?>