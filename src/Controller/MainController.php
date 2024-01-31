<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class MainController extends AbstractController
{
    public function main()
    {
        $this->render('main', 'Accueil', []);
    }
}
