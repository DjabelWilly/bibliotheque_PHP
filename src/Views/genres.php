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