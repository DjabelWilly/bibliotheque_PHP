<?php

namespace Poo\Project\Entity;

class Livre
{
    private int $id;
    private int $id_genre;
    private string $titre;
    private string $auteur;
    

    public function getId()
    {
        return $this->id;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

        public function getId_genre()
    {
        return $this->id_genre;
    }
 
    public function getTitre()
    {
        return $this->titre;
    }
}
