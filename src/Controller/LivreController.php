<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;
use Poo\Project\Controller\GenreController;

class LivreController extends AbstractController
{

    public function displayLivres()
    {
        $model = Model::getInstance();
        $result = $model->readAll('livre');
        $keyResult = ['livres' => $result];
        $this->render('livres', 'livres', $keyResult);

    }

    public function displayLivre()
    {
        $model = Model::getInstance();
        $livre = $model->getById('livre', $_GET['id']);
        // récupère la table "genre" en passant par la clé étrangère id_genre présente dans la table "livre"
        $genre = $model->getById('genre', $livre->getId_genre());
        $auteur = $model->getByAttribute('livre', ['id' => $livre->getId()]);

        $this->render('livre', $livre->getTitre(), [
            'livre' => $livre,
            'auteur' => $auteur,
            'genre' => $genre->getNom()
        ]);
  
    }


}

