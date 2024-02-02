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
<form action='' method='POST'>
    <label for='titre'>Titre</label>
    <input type='text' name='titre' id='titre'>
    <label for='auteur'>Titre</label>
    <input type='text' name='titre' id='titre'>

    <button type='submit' name='submit'>Envoyer</button>
</form>
