<<<<<<< HEAD
<?php 
echo "Titre: " . $livre->getTitre() .
"<br> Auteur: " . $livre->getAuteur() . 
"<br> Genre: " . $genre;
var_dump($genre);
=======
<?php
foreach ($livres as $livre):
    ?>
    <li>
        <?php
        echo "<a class='text-decoration-none text-black' href='?controller=LivreController&method=displaylivre&id=" . $livre->getId() . "'>" . $livre->getTitre() . "</a>"
            ?>
    </li>
    <?php
endforeach;
>>>>>>> e5bcc919fb401c2a32785425ec3118af9d4ebe27
