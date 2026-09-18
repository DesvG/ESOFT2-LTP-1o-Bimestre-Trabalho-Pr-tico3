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
 Descritivo: Escreva um programa que leia o nome e o sobrenome de uma pessoa e exiba-os na
seguinte forma formatada: 'sobrenome, nome' (exemplo: 'Flores, José').
****************************************************************/
echo "digite seu primeiro nome: ";
$nome = trim(fgets(STDIN));
echo "digite seu sobrenome: ";
$sobrenome = trim(fgets(STDIN));
echo $sobrenome.', '. $nome;
// o código pega o nome e sobrenome do usuário e exibe no formato solicitado //