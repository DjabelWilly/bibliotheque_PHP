<?php

namespace Poo\Project\Entity;

class Genre
{
    private int $id;
    private string $nom;
    

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

}