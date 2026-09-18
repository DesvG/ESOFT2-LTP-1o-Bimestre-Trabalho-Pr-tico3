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
