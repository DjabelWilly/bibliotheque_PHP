<section class="container p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3 ">
    <div>
        <h2>Nos livres par genre</h2>
    </div>

    <ul>
        <?php
        foreach ($genres as $genre) {
          echo "<li>  
                    <a class='text-decoration-none text-black' href='?controller=GenreController&method=displayGenre&id="
                        . $genre->getId() . "'>Genre " . $genre->getId() . " : " . $genre->getNom() .
                    "</a> 
                </li>";
        }

        ?>
    </ul>
     

 
<?php
    $message = isset($message) ? $message : '';
    if ($message !== '') {
    echo "<p class='text-danger'>" . $message . "</p>";
    var_dump($message);
    }

?>
<form action='?controller=GenreController&method=createGenre' method='POST'>
    <label for='nom'>Nom</label>
    <input type='text' name='nom' id='nom'>

    <button type='submit' name='submit'>Envoyer</button>
</form>
