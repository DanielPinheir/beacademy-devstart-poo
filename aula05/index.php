<?php

//boa pratica por em ordem alfabetica
//Usuario vem antes pois Gestor e Cliente dependem dela
include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('chiquim@email.com', '123456'); //usando construtor do usuario
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2022');

$cpf = "12345678911";

//$validador = new Validar();
//$validador->validarCpf($cpf);

//nova forma de validar com apenas 1 linha de comando
Validar::validarCpf($cpf);

$g1 = new Gestor('zezim@email.com', '654321', 6000 ); //usando construtor do gestor
$g1->setNome('Zezim');

$gg1 = new GestorGeral('maria@email.com', '1h2j3i', 9000);

//não pode instanciar pois é uma classe abstrata
//$us = new Usuario('hacker@email.com', '123456'); 


var_dump($c1);
var_dump($g1);