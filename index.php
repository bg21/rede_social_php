<?php 
    session_start();
    require __DIR__ . '/vendor/autoload.php';

    define('INCLUDE_PATH_STATIC', 'http://localhost/RedeSocial/RedeSocial/Views/src/');

    $app = new RedeSocial\Application();
    $app->run();

    