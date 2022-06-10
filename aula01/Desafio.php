<?php

declare(strict_types=1);

//criar classe Curso com tres atributos
class Curso {
  private $nome;
  private $cargaHoraria;
  private $area;
}

//criar classe Professor com tres atributos
class Professor {
  public $nome;
  public $cpf;
  public $disciplina;
}

//criar classe Disciplina com tres atributos
class Disciplina {
  public $nome;
  public $curso;
  public $professor; 
}