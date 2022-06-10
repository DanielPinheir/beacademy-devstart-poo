<?php

//boa pratica por em ordem alfabetica
//Usuario vem antes pois Gestor e Cliente dependem dela
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';


$c1 = new Cliente('chiquim@email.com', '123456'); //usando construtor do usuario
$c1->setNome('Chiquim');
$c1->setDataCadastro('01/01/2022');

$g1 = new Gestor('zezim@email.com', '654321', 6000 ); //usando construtor do gestor
$g1->setNome('Zezim');


var_dump($c1);
var_dump($g1);