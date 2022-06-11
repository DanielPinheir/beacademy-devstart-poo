<?php

declare(strict_types=1);
//herdando de usuario
class Gestor extends Usuario
{
  private float $salario;
  private string $horario;

  public function __construct(string $email, string $senha, float $salario)
  {
    parent::setEmail($email);   //acessando email privado atraves da heranca(Usuario)
    parent::setSenha($senha);   //acessando senha privada atraves da heranca(Usuario)
    $this->salario = $salario;
  }
  

  //salario
  public function getSalario(): float
  {
    return $this->salario;
  }

  public function setSalario(float $salario): void
  {
    $this->salario = $salario;
  }

  //horario
  public function getHorario(): string
  {
    return $this->horario;
  }

  public function setHorario(string $horario): void
  {
    $this->horario = $horario;
  }
}