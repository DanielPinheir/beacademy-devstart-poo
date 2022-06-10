<?php

declare(strict_types=1);

class Produto 
{ 
  //atributos
  //private faz o encapsulamento
  private string $nome;
  private float $valor;

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
}

