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

    public function displayLivreByGenre()
    {
        $model = Model::getInstance();

        $genre = $model->getById('genre', $_GET['id']);

        $livre = $model->getById('livre', $genre->getId());

        $titre = $model->getByAttribute('livre', ['id_genre' => $livre->getTitre()]);

        $this->render('genre', $genre->getNom(), [
             'livre' => $livre->getAuteur,
            // 'titre' => $titre,
            // 'genre' => $genre->getNom()
        ]);
     
  
    }
}