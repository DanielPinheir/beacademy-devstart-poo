<?php

declare(strict_types=1);

namespace App\Controller;

//abstract=>classe não vai poder ser instanciada
abstract class AbstractController
{   
    //dirname => pega a minha localização e volta uma pasta 
    //evita ter que digitar o endereco inteiro
    public function render(string $viewName): void
    {
        include dirname(__DIR__) . "/View/{$viewName}.php";
    }
}

