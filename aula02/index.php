<?php

include 'Produto.php';

$p1 = new Produto();
$p1->alterarnome = 'Tenis para corrida';
$p1->valor = 299;

$p2 = new Produto();
$p2->alterarnome = 'Saia jeans';
$p2->valor = 100;


/*
$p2 = new Produto();
$p2->nome = 'Calça jeans';
$p2->valor = -100;

var_dump($p1);
var_dump($p2);
*/