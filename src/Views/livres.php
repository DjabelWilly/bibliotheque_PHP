<p>Liste des livres</p>

<ul>
    <?php
    foreach ($livres as $livre) {
         echo "<li>  <a href='?controller=LivreController&method=displayLivre&id=" . $livre->getId() . "'>Livre " . $livre->getId() . " : " . $livre->getTitre() ."</a> </li>";
        // var_dump($livre->getTitre());
    }

    ?>
</ul>