<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;
use Poo\Project\Controller\LivreController;


class GenreController extends AbstractController
{
    // gestion de l'affichage des genres
    public function displayGenres()
    {
        $model = Model::getInstance();
        $result = $model->readAll('genre');
        $genreResult = ['genres' => $result];
        // $genre = $model->getByAttribute('genre', ['id' => $genre->getNom()]);
        $this->render('genres', 'Nos livres par Genres', $genreResult);

    }
    // affichage des livres par genre
    public function displayGenre()
    {
        $model = Model::getInstance();

        $genre = $model->getById('genre', $_GET['id']);
        $livresParGenre = $model->getByAttribute('livre', ['id_genre' => $_GET['id']]);

        $variables = [
            // 'genre' => $genre,
            'livres' => $livresParGenre,
        ];

        $this->render('genre', $genre->getNom(), $variables);
    }


}
