<?php

echo "Titre: " . $livre->getTitre() .
    "<br> Auteur: " . $livre->getAuteur() . 
    "<br> Genre: " . $genre;

//    "<a href='?controller=AuteurController&method=displayAuteur&id=" . $livre->getId() . "'>Livre " . $livre->getId() . " : " . $livre->getTitre() . "</a>";