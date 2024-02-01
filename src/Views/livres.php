<section class="container p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3 ">
    <div>
        <h2>Liste des livres</h2>
    </div>

    <ul>
        <?php
        foreach ($livres as $livre) {
            echo "<li>  
                    <a class='text-decoration-none text-black' href='?controller=LivreController&method=displayLivre&id=" .
                    $livre->getId() . "'>Livre " . $livre->getId() . " : " . $livre->getTitre() .
                    "</a> 
                </li>";
          
        }

        ?>
    </ul>
</section>