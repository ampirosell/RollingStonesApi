<?php
    //aca requiere el ruter especial
    require_once('libs/Router.php');
    //aca requiere el controlador
    require_once('api/albums.api.controller.php');
    require_once('api/song.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    

    $router = new Router();

    // rutas songs
    $router->addRoute("/songs", "GET", "songApiController", "getAll");
    $router->addRoute("/songs/:ID", "GET", "songApiController", "getSong");
    $router->addRoute("/songs/:ID", "DELETE", "songApiController", "deleteSong");
    $router->addRoute("/songs", "POST", "songApiController", "insert");
    $router->addRoute("/songs/:ID", "PUT", "songApiController", "updateSong");
    //rutas album
    $router->addRoute("/albums", "GET", "albumsApiController", "getAll");
    $router->addRoute("/albums/:ID", "GET", "albumsApiController", "getAlbum");
    $router->addRoute("/albums/:ID", "DELETE", "albumsApiController", "deleteAlbum");
    $router->addRoute("/albums", "POST", "albumsApiController", "addAlbum");
    $router->addRoute("/albums/:ID", "PUT", "albumsApiController", "updateAlbum");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
    

?>

