<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$p1 = new Professor();
$p1->nome = 'Daniel';
$p1->cpf = '08999133227';
$p1->salario = 1000;

var_dump($p1);