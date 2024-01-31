<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;


class GenreController extends AbstractController
{

    public function displayGenre()
    {
        $model = Model::getInstance();
        $result = $model->readAll('genre');
        $genreResult = ['genres' => $result];
        // $genre = $model->getByAttribute('genre', ['id' => $genre->getNom()]);
        $this->render('genres', 'Genres', $genreResult);

    }
}