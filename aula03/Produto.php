<?php

declare(strict_types=1);

class Produto 
{ 
  //atributos
  //private faz o encapsulamento
  private string $nome;
  private float $valor;
  private string $descricao;
  //relacionando os objetos
  //colocando objeto Categoria como atributo da classe produto 
  //readonly - apenas para leitura, não vai conseguir alterar depois de definida
  private readonly Categoria $categoria;

  //metodo construtor
  //metodo magico construcao objeto
  public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
  {
    $this->nome = $novoNome;
    $this->valor = $novoValor;
    $this->categoria = $categoria;
  }

  //metodos
  //metodos get retornam alguma coisa
  public function getNome() : string 
  {
    return $this->nome;
  }

  //metodos set alteram algo
  //dificilmente retornam algo
  public function setNome(string $novoNome) : void
  {
    if (strlen($novoNome) < 3)  {
      die('Nome inválido. Digite um nome acima de três letras.');
    }
    $this->nome = $novoNome;
  }

  public function getValor() : float
  {
    return $this->valor;
  }
  
  public function setValor(float $novoValor) : void
  { 
    if ($novoValor < 0) {
      die('Valor não pode ser negativo.');
    }
    $this->valor = $novoValor;
  }

  public function getDescricao() : string
  {
    return $this->descricao;
  }

  public function setDescricao(string $novaDescricao): void
  {
    $this->descricao = $novaDescricao;
  }

  public function setCategoria(Categoria $categoria) : void
  {
    $this->categoria = $categoria;
  }
}