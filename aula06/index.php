<?php

include 'vendor/autoload.php';

//usando um alias indicarndo o caminho de forma mais rapida
use Classes\Config\Usuario;
use Classes\Categoria;

//$us1 = new Classes\Usuario();
$us2 = new Usuario();

$c1 = new Categoria();

// var_dump($us1);
var_dump($us2);
var_dump($c1);