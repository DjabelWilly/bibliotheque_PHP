<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class SearchController extends AbstractController
{
    public function index()
    {
        $genres = Model::getInstance()->readAll('genre');
        $livres = Model::getInstance()->readAll('livre');
        $this->render('search/index', 'Accueil', []);
    }


}