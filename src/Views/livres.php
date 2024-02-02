<section class="container">
    <div class="d-flex justify-content-end">
        <?php
        if ($message !== '') {
            echo "<p class='text-danger'>" . $message . "</p>";
        }
        ?>
        <form action='' method='POST'>
            <label for='titre'>Ajouter un Livre</label>
            <input type='text' name='titre' id='titre' placeholder="titre">

            <label for='auteur'></label>
            <input type='text' name='auteur' id='auteur' placeholder="auteur">

            <!-- <label for='genre'></label>
            <input type='text' name='genre' id='genre' placeholder=""> -->

            <select name="genre" id="id_genre">
                <option value="">genre</option>
                <option value="Fantastique">Fantastique</option>
                <option value="Comedie">Comédie</option>
                <option value="Action">Action</option>
                <option value="Drame">Drame</option>
                <option value="Science-Fiction">Science-Fiction</option>
                <option value="Horreur">Horreur</option>
            </select>

            <button type='submit' name='submit'>Envoyer</button>
        </form>
    </div>
</section>
<br>

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