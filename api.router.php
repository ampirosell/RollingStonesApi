<?php
    //aca requiere el ruter especial
    require_once('libs/Router.php');
    //aca requiere el controlador
    require_once('./api/task.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas songs
    $router->addRoute("/songs", "GET", "song.api.controller", "getAll");
    $router->addRoute("/songs/:ID", "GET", "song.api.controller", "getSong");
    $router->addRoute("/songs/:ID", "DELETE", "song.api.controller", "deleteSongById");
    $router->addRoute("/songs", "POST", "song.api.controller", "addSong");
    $router->addRoute("/songs/:ID", "PUT", "song.api.controller", "updateSong");
    //rutas album
    $router->addRoute("/albums", "GET", "albums.api.controller", "getAll");
    $router->addRoute("/albums/:ID", "GET", "albums.api.controller", "getAlbum");
    $router->addRoute("/albums/:ID", "DELETE", "albums.api.controller", "deleteAlbum");
    $router->addRoute("/albums", "POST", "albums.api.controller", "addAlbum");
    $router->addRoute("/albums/:ID", "PUT", "albums.api.controller", "updateAlbum");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
    

?>

