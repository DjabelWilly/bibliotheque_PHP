<section class="container">
    <div class="d-flex justify-content-end">
        <?php
        use Poo\Project\Controller\GenreController;
        if ($message !== '') {
            echo "<p class='text-danger'>" . $message . "</p>";
        }
        ?>

        <!-- form de recherche de livre -->

        <form action='' method='POST'>
            <label for='titre'>Ajouter un Livre</label>
            <input type='text' name='titre' id='titre' placeholder="titre">

            <label for='auteur'></label>
            <input type='text' name='auteur' id='auteur' placeholder="auteur">

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
    <!-- end form de recherche de livre -->

</section>
<br>

<section class="container p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3 ">
    <div>
        <h2>Liste des livres</h2>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"># id</th>
                <th scope="col">titre</th>
                <th scope="col">auteur</th>
                <th scope="col">genre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($livres as $livre) {
               
                echo "<tr> 
                        <th scope='row'> <a class='text-decoration-none text-black' href='?controller=LivreController&method=displaylivre&id=". $livre->getId() ."'>". $livre->getId(). "</a> </th>
                        <td> <a class='text-decoration-none text-black' href='?controller=LivreController&method=displaylivre&id=" . $livre->getId() . "'>" . $livre->getTitre() . "</a> </td>
                        <td> <a class='text-decoration-none text-black' href='?controller=LivreController&method=displaylivre&id=" . $livre->getId() . "'>" . $livre->getAuteur() . "</a> </td>
                        <td>" . $livre->getId_genre() . "</td>
                    </tr>";

            }
            ?>
        </tbody>
    </table>
</section>

