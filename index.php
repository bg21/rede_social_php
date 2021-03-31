<?php 
    session_start();
    ob_start();
    
    require __DIR__ . '/vendor/autoload.php';

    define('INCLUDE_PATH_STATIC', 'http://localhost/RedeSocial/RedeSocial/Views/src/');

    define("INCLUDE_PATH", "http://localhost/RedeSocial/RedeSocial/");

    define('HOST', 'localhost');
    define('DATABASE', 'redesocialphp');
    define('USER', 'root');
    define('PASSWORD', '');

    $app = new RedeSocial\Application();
    $app->run();

    