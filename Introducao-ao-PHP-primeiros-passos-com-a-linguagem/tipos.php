<?php
//PHP é uma linguagem dinamicamente tipada, ou seja, o tipo de dado é definido pelo seu valor e não precisa ser declarado.

$idade = 21;

echo gettype($idade); //gettype serve para exibir qual o tipo de dado que está sendo processado pelo PHP

$salario = 1000.301;
echo gettype($salario);

$divisao = 10 / 3 ;
echo gettype($divisao);

$texto = "Olá mundo";
echo gettype($texto);

$verdadeiro = true;
$falso = false;

?>