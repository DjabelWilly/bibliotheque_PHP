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
        // assigne à $result le contenu de la table livre (readAll retourne un tableau d'objet)
        $result = $model->readAll('livre');
        // crée un tableau $keyResult qui a pour clé: livres et pour valeur: $result
        $keyResult = ['livres' => $result];
        $this->render('livres', 'Nos livres', $keyResult);

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

