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
