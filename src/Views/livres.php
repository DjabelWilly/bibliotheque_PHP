<section class="container">
    <div class="d-flex justify-content-end"> 
        <?php
            $message = isset($message) ? $message : '';

        if ($message !== '') {
            echo "<p class='text-danger'>" . $message . "</p>";
        }
        ?>
         <form action="?controller=LivreController&method=createLivre" method='POST'>
            <label for='titre'>Ajouter un Livre</label>
            <input type='text' name='titre' id='titre' placeholder="titre">

            <label for='auteur'></label>
            <input type='text' name='auteur' id='auteur' placeholder="auteur">

            <!-- <label for='genre'></label> -->
            <!-- <input type='text' name='genre' id='id_genre' value="getGenre" placeholder="genre"> -->

            <select class="form-select" aria-label="Default select example" name="id_genre">
                          <option selected>Selectionner le genre</option>
                          <option value="1">Fantastique</option>
                          <option value="3">Comédie</option>
                          <option value="4">Drame</option>
                          <option value="5">Action</option>
                          <option value="6">Science-Fiction</option>
                          <option value="7">Horreur</option>
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


<!-- <div class="card">
  <div class="card-body">
   
        <div class="card">
          <div class="card-body">

                <form action="?controller=LivreController&method=addlivre" method='POST'>
                  <h2>Formulaire de création d'un livre</h2>
                  
                  <div class="form-group">
                    <label for="formGroupExampleInput">Titre du livre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Un titre" name="titre">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput2">Auteur du livre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Un auteur" name="auteur">
                  </div>

                  <div>
                  <label for="formGroupExampleInput3">Selectionner un genre</label>
                    <select class="form-select" aria-label="Default select example" name="id_genre">
                          <option selected>Select le genre</option>
                          <option value="1">Fantastique</option>
                          <option value="3">Comédie</option>
                          <option value="4">Drame</option>
                          <option value="5">Action</option>
                          <option value="6">Science-Fiction</option>
                          <option value="7">Horreur</option>
                    </select>
                  </div>
                
                  </br>

                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Ajouter</button>
                  </div>

          </div>
        </div>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">TITRE</th>
          <th scope="col">AUTEUR</th>
          <th scope="col">GENRE</th>
        </tr>
      </thead>
      <tbody>
         <?php foreach ($livres as $livre) : ?> 
          <tr>

            <td><?php echo $livre->getTitre(); ?></td>
            <td><?php echo $livre->getAuteur(); ?></td>
            <td><?php echo $livre->getGenre()->getNom(); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>
</br> -->