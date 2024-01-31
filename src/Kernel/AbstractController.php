<?php

namespace Poo\Project\Kernel;

class AbstractController
{
    public function render(string $view, string $page_title, array $vars)
    {

        $vars['page_title'] = $page_title;
        extract($vars);
        include_once(__DIR__ . '/../Views/Template/head.php');
        include_once(__DIR__ . '/../Views/Template/header.php');
        include_once(__DIR__ . '/../Views/' . $view . '.php');
        include_once(__DIR__ . '/../Views/Template/footer.php');
    }

    // public function redirect(string $url)
    // {
    //     header('Location: ' . $url);
    //     exit();
    // }

    // public function isLogged()
    // {
    //     if (isset($_SESSION['user'])) {
    //         return true;
    //     }
    //     return false;
    // }

}
