<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;
use Poo\Project\Controller\GenreController;
use Poo\Project\Kernel\Validate;

class LivreController extends AbstractController
{
    // gestion de l'affichage de tous les livres
    public function displayLivres()
    {
        $model = Model::getInstance();
        // assigne à $result le contenu de la table livre (readAll retourne un tableau d'objet)
        $result = $model->readAll('livre');
        // crée un tableau $keyResult qui a pour clé: livres et pour valeur: $result
        $keyResult = ['livres' => $result];

        $this->render('livres', 'Nos livres', $keyResult);  

    }

    // gestion de l'affichage d'un livre
    public function displayLivre()
    {
        $model = Model::getInstance();
        $livre = $model->getById('livre', $_GET['id']);
        // récupère la table "genre" en passant par la clé étrangère id_genre présente dans la table "livre"
        $genre = $model->getById('genre', $livre->getId_genre());
        // $auteur = $model->getByAttribute('livre', ['id' => $livre->getId()]);

        $this->render('livre', $livre->getTitre(), [
            'livre' => $livre,
            // 'auteur' => $auteur,
            'genre' => $genre->getNom(),
        ]);
    }
  
    public function displayLivresAuteur()
    {
        $model = Model::getInstance();

        $livre = $model->getById('livre', $_GET['id']);
        $livres = $model->getByAttribute('livre', ['id' => $livre->getAuteur()]);

        $variables = [
            
            'livres' => $livres,
        ];

        $this->render('auteur', $livre->getAuteur(), $variables);
    }
    


    // ajouter un livre
    public function createLivre()
    {
        $message = '';
        if (isset($_POST['submit'])) {

            $message = Validate::valideName($_POST['titre'], "le champ 'Titre' contient des caracteres incorrects<br>", "le champ 'Titre' est vide<br>");
            $message .= Validate::valideName($_POST['genre'], "le champ 'Genre' contient des caracteres incorrects<br>", "le champ 'Genre' est vide<br>");
            $message .= Validate::validateNumber($_POST['auteur'], "le champ 'Auteur' contient des caracteres incorrects<br>", "le champ ' Auteur' est vide<br>");
            // $message .= Validate::validateNumber($_POST['id_genre'], "le champ 'id_genre' contient des caracteres incorrects<br>", "le champ 'id_genre' est vide<br>");

            if ($message === '') {
                $datas = [
                    'titre' => $_POST['titre'],
                    'genre' => $_POST['genre'],
                    'auteur' => $_POST['auteur'],
                    
                ];
                Model::getInstance()->save('livre', $datas);
                $message = "le livre " . $datas['titre'] . " a bien été enregistré";
            }
        }
        $this->render('livres', 'nouveau Livre', ['message' => $message]);
    }
}
