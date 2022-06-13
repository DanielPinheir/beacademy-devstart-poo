<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function indexAction(): void
    {
        echo 'Voce esta dentro de uma action, dentro de um contoller'
    }

    public function listAction(): void
    {
        parent::render('category/list');
    }

    public function addAction(): void
    {
        parent::render('category/add'); 
    }

    public function editAction(): void
    {
        parent::render('category/edit');
    }
}