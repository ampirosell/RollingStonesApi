<?php
    //aca requiere el ruter especial
    require_once('Router.php');
    //aca requiere el controlador
    require_once('./api/task.api.controller.php');
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();

    // rutas
    $router->addRoute("/tareas", "GET", "TaskApiController", "getTasks");
    $router->addRoute("/tareas/:ID", "GET", "TaskApiController", "getTask");
    $router->addRoute("/tareas/:ID", "DELETE", "TaskApiController", "deleteTask");
    $router->addRoute("/tareas", "POST", "TaskApiController", "addTask");
    $router->addRoute("/tareas/:ID", "PUT", "TaskApiController", "updateTask");

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
    
    //esto estaba en otro router

//     <?php
//     require_once('controllers/task.controller.php');
//     require_once('controllers/login.controller.php');
//     require_once('Router.php');
    
//     // CONSTANTES PARA RUTEO
//     define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
//     define("LOGIN", BASE_URL . 'login');
//     define("VER", BASE_URL . 'ver');

//     $r = new Router();

//     // rutas
//     $r->addRoute("login", "GET", "LoginController", "showLogin");
//     $r->addRoute("verify", "POST", "LoginController", "verifyUser");
//     $r->addRoute("logout", "GET", "LoginController", "logout");
//     $r->addRoute("ver", "GET", "TaskController", "showTasks");
//     $r->addRoute("tarea/:ID", "GET", "TaskController", "showTask");
//     $r->addRoute("eliminar/:ID", "GET", "TaskController", "deleteTask");
//     $r->addRoute("finalizar/:ID", "GET", "TaskController", "endTask");
//     $r->addRoute("nueva", "POST", "TaskController", "addTask");

//     //Ruta por defecto.
//     $r->setDefaultRoute("TaskController", "showTasks");

//     //run
//     $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
// ?>

