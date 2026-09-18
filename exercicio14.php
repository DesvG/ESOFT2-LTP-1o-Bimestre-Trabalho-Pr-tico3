<?php
/*******************************
 Curso: Engenharia de Software
 Disciplina: Linguagem e Técnicas de Programação
 Professor: Flores
 Turma: ESOFT-2
 Componentes:
 26004871-2 - Derick Narresi 
 26013191-2 - Giovanna Yoko Figueredo Durigan Nakai
 26009755-2 - Guilherme Massaro De Souza
 26009484-2 - Gustavo Zangirolami Pavoni
 26007287-2 - Yago De Souza Rodrigues
 Data: 19 de Setembro de 2026
 Descritivo: Escreva um programa que leia o nome de um aluno e suas duas notas em avaliações
(AVs), calcule a média aritmética simples e exiba o nome do aluno seguido de sua média
final.
****************************************************************/
echo "digite o nome do aluno: ";
$nome = trim(fgets(STDIN));
echo "digite a primeira nota: ";
$nota1 = (float) trim(fgets(STDIN));
echo "digite a segunda nota: ";
$nota2 = (float) trim(fgets(STDIN));
$media = ($nota1 + $nota2) / 2;
echo $nome . ", média final: " . $media;
// o código pega o nome do aluno e suas duas notas, calcula a média e exibe o resultado //