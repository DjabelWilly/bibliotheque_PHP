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
        $livre = $model->getById('livre', $_GET['id']);
        // récupère la table "genre" en passant par la clé étrangère id_genre présente dans la table "livre"
        $genre = $model->getById('genre', $livre->getId_genre());
        $auteur = $model->getByAttribute('livre', ['id' => $livre->getId()]);

        $this->render('genre', $livre->getTitre(), [
            'livre' => $livre,
            'auteur' => $auteur,
            'genre' => $genre->getNom()
        ]);
  
    }
}