<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;


class LivreController extends AbstractController{

    public function displayLivres()
    {
        $model = Model::getInstance();
        $result = $model->readAll('livre');
        $keyResult = ['livres' => $result];
        $this->render('livres', 'livres', $keyResult);

    }



}

 