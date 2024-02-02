<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;
use Poo\Project\Controller\GenreController;
use Poo\Project\Kernel\Validate;

class LivreController extends AbstractController
{

    public function displayLivres()
    {
        $model = Model::getInstance();
        // assigne à $result le contenu de la table livre (readAll retourne un tableau d'objet)
        //Récupération des livres : Ensuite, elle utilise la méthode readAll() du modèle pour récupérer tous les livres de la base de données. La méthode readAll() prend en paramètre le nom de l'entité (dans ce cas, 'livre') et retourne un tableau d'objets, où chaque objet représente un livre.
        $result = $model->readAll('livre');
        // crée un tableau $keyResult qui a pour clé: livres et pour valeur: $result
        //Préparation des données pour la vue : Après avoir récupéré les livres, la méthode crée un tableau associatif $keyResult avec une clé 'livres' et la valeur $result, qui est le tableau d'objets livres récupérés. Ce tableau est préparé pour être passé à la méthode de rendu de la vue.
        $keyResult = ['livres' => $result];
        //Rendu de la vue : Enfin, la méthode appelle la méthode render() pour afficher la vue des livres. Elle passe le nom de la vue ('livres'), le titre de la page ('Nos livres'), et le tableau associatif $keyResult contenant les données des livres à afficher. Ces données seront ensuite disponibles dans la vue pour être présentées à l'utilisateur.
        $this->render('livres', 'Nos livres', $keyResult);

    }

    public function displayLivre()
    {
        //Initialisation du modèle : La méthode commence par obtenir une instance du modèle en utilisant Model::getInstance(). Le modèle est probablement responsable de l'interaction avec la base de données.
        $model = Model::getInstance();

        //Récupération du livre : Ensuite, elle utilise la méthode getById() du modèle pour récupérer un livre spécifique de la base de données en utilisant l'ID fourni via $_GET['id']. L'ID est passé comme argument à la méthode getById(), qui renvoie un objet représentant le livre correspondant à cet ID.
        $livre = $model->getById('livre', $_GET['id']);

        // Récupération du genre : Après avoir obtenu le livre, la méthode récupère également le genre associé à ce livre. Elle utilise à nouveau la méthode getById() du modèle, mais cette fois avec l'entité 'genre' et l'ID du genre obtenu à partir de l'objet livre ($livre->getId_genre()).
        $genre = $model->getById('genre', $livre->getId_genre());

        //Récupération de l'auteur : La méthode tente ensuite de récupérer l'auteur du livre en utilisant la méthode getByAttribute() du modèle. Cependant, il semble y avoir une erreur logique ici car elle essaie de récupérer des auteurs en utilisant l'ID du livre comme critère de recherche, ce qui n'est pas correct si chaque livre a un seul auteur. Il faudrait plutôt rechercher l'auteur en utilisant l'ID de l'auteur, qui devrait être stocké dans la table des livres.
        $auteur = $model->getByAttribute('livre', ['id' => $livre->getId()]);

        //Affichage du livre : Enfin, la méthode appelle la méthode render() pour afficher le livre. Elle passe le nom de la vue ('livre'), le titre de la page (qui est le titre du livre), et un tableau associatif contenant les données du livre, de l'auteur et du genre à afficher. Ces données sont ensuite disponibles dans la vue pour être présentées à l'utilisateur.
        $this->render('livre', $livre->getTitre(), [
            'livre' => $livre,
            'auteur' => $auteur,
            'genre' => $genre->getNom()
        ]);
  
    }

    public function createLivre()
    {
        $message = '';
        if (isset($_POST['submit'])) {

            $message = Validate::valideName($_POST['titre'], "le champ 'Titre' contient des caracteres incorrects<br>", "le champ 'Titre' est vide<br>");
            $message = Validate::valideName($_POST['titre'], "le champ 'Titre' contient des caracteres incorrects<br>", "le champ 'Titre' est vide<br>");

            if ($message === '') {
                $titre = $_POST['titre'];
                
                Model::getInstance()->save('livre', ['livre' => $titre]);
                $message = "le livre " . $titre . " a bien été enregistré";
            }
        }

        $this->render('livres', 'Nouvel Auteur', ['message' => $message]);
    }

}

