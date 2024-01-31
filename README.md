# Micro-Framework-PHP

Votre exercice est de le compléter le code de ce Micro Framework
pour qu'il puisse répondre à la demande suivante :

Nous avons besoin: 
- d'une page qui affiche la liste des livres et des fonctionnalités de recherche et de tri. Il sera possible
de rechercher un livre par son titre ou son auteur et de trier par genre.
Il sera sous forme de tableau.
Puis, nous aurons:
- une page qui affiche la liste des genres et un formulaire de création
- une page qui affiche la liste des livres et un formulaire de création

Pour vous aider, voici les différents éléments que vous pouvez utiliser :
- [ ] Vous pouvez utiliser la classe `Model` pour récupérer les données
- [ ] Vous pouvez utiliser les superglobales `$_GET` et `$_POST` pour récupérer les données des formulaires
- [ ] Vous pouvez utiliser l'url pour passer des paramètres à vos pages

Vous trouverez ci-dessous consignes à respecter pour réaliser cet exercice :
- [ ] Vous devez créer 2 classes(entités) : Livre et Genre 
- /!\ Vous devez écrire les getters et les setters pour chaque attribut de vos classes
    - [ ] Livre :
        - [ ] id : int
        - [ ] title : string
        - [ ] author : string
        - [ ] id_genre : int
    - [ ] Genre :
        - [ ] id : int
        - [ ] name : string
- [ ] Utiliser des controllers pour gérer l'affichage des pages et la logique métier.
- [ ] Utiliser la classe `Model` pour récupérer les données (voir Model).
- [ ] Gérer la structure de fichier de vos vues en prenant exemple sur cette arborescence :
    - [ ] Views
        - [ ] search (dossier)
            - [ ] index.php
            - [ ] search.php
            - [ ] ect...
        - [ ] autre (dossier)
            - [ ] index.php
            - [ ] autre.php
            - [ ] ect...
        - index.php
- [ ] Créer un formulaire de création de livre 
- [ ] Créer un formulaire de création de genre
- /!\ Vous devez valider les données de vos formulaires
