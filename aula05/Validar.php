<?php

declare(strict_types=1);

//abstract=> não poderar ser instanciada
abstract class Validar
{
  //static => não precisa mais instanciar
  public static function validarCpf(string $cpf): void
  {
    if (strlen($cpf) !== 11) {//apenas numeros
      die('CPF inválido.');
    }
  }
}

