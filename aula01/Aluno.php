<?php

declare(strict_types=1);

//criando uma classe
class Aluno
{
  //atributos
  private string $nome; 
  private string $cpf;

  //metodo do nome
  public function getNome() : string 
  {
    return $this->nome;
  }

  public function setNome(string $novoNome) : void
  {
    if (strlen($novoNome) < 3)  {
      die('Nome inválido. Digite um nome acima de três letras.');
    }
    $this->nome = $novoNome;
  }

//metodo do cpf
  public function getCPF() : string 
    {
      return $this->cpf;
    }

  public function setCPF(string $novoCPF) : void
  {
    if (strlen($novoCPF) < 11)  {
      die('CPF com número de caracteres insuficiente.');
    }
    $this->cpf = $novoCPF;
  }
}
