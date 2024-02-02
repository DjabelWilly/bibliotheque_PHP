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
