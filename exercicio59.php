<?php
//*
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
[26004871-2] - [Derick Naressi]
[26013191-2] - [Giovanna Yoko Figueredo Durigan Nakai]
[26009755-2] - [Guilherme Massaro de Souza]
[26009484-2] - [Gustavo Zangirolami Pavoni]
[26007287-2] - [Yago de Souza Rodrigues]
Data: 19 de Setembro de 2026
*/
    
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
