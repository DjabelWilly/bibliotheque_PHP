<?php

namespace Poo\Project\Config;

abstract class Config
{
    const DBNAME = 'tp';

    const DBHOST = 'localhost:3306';
    const DBUSER = 'tp';
    const DBPWD = 'root';

    const DEFAULT_CONTROLLER = 'MainController';
    const DEFAULT_METHOD = 'main';
    const CONTROLLER = 'Poo\Project\Controller\\';
    const TEMPLATE_FOLDER = __DIR__ . '/../Views/Template/';
}
