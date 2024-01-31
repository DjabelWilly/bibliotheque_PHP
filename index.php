<?php

use Poo\Project\Kernel\Dispatcher;

include_once('vendor/autoload.php');

try {
    Dispatcher::dispatch();
} catch (Exception $e) {
    echo $e->getMessage();
}
