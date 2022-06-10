<?php

declare(strict_types=1);

class Categoria
{
  //forma mais pratica de definir um construtor sem repetir os atributos
  //so funciona a partir do PHP8
  public function __construct(
    private string $nome,
    private string $descricao
  ){
  }

/*
  //forma anterior de fazer o construtor
  //encapsulamento
  private string $nome;
  private string $descricao;

  //categorias obrigatorias
  //metodo construtor
  public function __construct(string $nome, string $descricao)
  {
    $this->nome = $nome;
    $this->descricao = $descricao;
  }
*/

public function getNome() : string
{
  return $this->nome;
}

public function setNome(string $nome) : void
{
  $this->nome = $nome;
}


}

