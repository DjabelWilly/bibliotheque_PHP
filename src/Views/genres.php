<p>Liste des livres</p>

<ul>
    <?php
    foreach ($genres as $genre) {
        echo "<li>  <a href='?controller=GenreController&method=displayGenre&id=" . $genre->getId() . "'>Genre " . $genre->getId() . " : " . $genre->getNom() . "</a> </li>";
        // var_dump($livre->getTitre());
    }

    ?>
</ul>