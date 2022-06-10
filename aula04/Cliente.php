<?php
declare(strict_types=1);
//herdando de usuario
class Cliente extends Usuario
{
  private string $dataCadastro;

  
  //data cadastro
  public function getDataCadastro(): string
  {
    return $this->dataCadastro;
  }

  public function setDataCadastro(string $dataCadastro): void
  {
    $this->dataCadastro = $dataCadastro;
  }
}