<?php
require_once('models/Song.model.php');
require_once('models/album.model.php');
require_once("json.view.php");

class albumsApiController {
    protected $albumModel;
    protected $view;
    private $data; 

    
    public function __construct() {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); 
        $this->albumModel = new albumModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  


  
    public function getAllAlbums($params = null) {
        $songs = $this->albumModel->getAllAlbums();
        if($songs)
            $this->view->response($songs, 200);
        else 
            $this->view->response('No existen albumes ni canciones', 404);
    }

    /**
     * Obtiene una cancion dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getAlbum($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $album = $this->albumModel->getOneAlbum($id);
        
        if ($album) {
            $this->view->response($album, 200);   
        } else {
            $this->view->response("No existe el album con el id={$id}", 400);
        }
    }
    public function getSongsByAlbum($params = '') {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $songs = $this->albumModel->getSongsByAlbumID($id);
        
        if ($songs) {
            $this->view->response($songs, 200);   
        } else {
            $this->view->response("No existe el album con el id={$id}", 400);
        }
    }
    

   
    public function deleteAlbum($params = []) {
        $this->checkLoggedIn();
        $album_id = $params[':ID'];
        $album = $this->albumModel->getOneAlbum($album_id);

        if ($album) {
            $this->albumModel->deleteAlbumById($album_id);
            $this->view->response("album id=$album_id eliminado con éxito", 200);
        }
        else 
            $this->view->response("album id=$album_id not found", 404);
    }



    public function addAlbum($params = []) {    
        $this->checkLoggedIn();
        $body = $this->getData();
        $title=$body->titulo_album;
        $year=$body->year_release;
        $img=$body->img_cover;

        $newAlbum = $this->albumModel->insertAlbum( $title,$year,$img);
       
        if ($newAlbum)
            $this->view->response("album nuevo de id=$newAlbum", 201);
        else
            $this->view->response("Error al insertar Album", 500);
    }

    public function updateAlbum($params = []) {
        $this->checkLoggedIn();
        $album_id = $params[':ID'];
        $album = $this->albumModel->getOneAlbum($album_id);
        
        if ($album) {
            $body = $this->getData();
            $title=$body->titulo_album;
            $year=$body->year_release;
            $img=$body->img_cover;
        
            $this->albumModel->updateAlbum($title, $year, $img,$album_id );
            $this->view->response("album id=$album_id actualizado con éxito", 200);
        }
        else 
            $this->view->response("album id=$album_id not found", 404);
    }
    
    public function ordenarAlbums(){
        $sort='';
        if(isset($_GET['sort']))
            $sort = $_GET['sort'];
        $order='';
        if (isset($_GET['order']))
            $order = $_GET['order'];
        if(!empty($sort)&&!empty($order)){
            $albums=$this->albumModel->getAlbums($sort,$order);
            $this->view->response($albums,200);  
        }
        else if(!empty($sort)&&empty($order)){
            $order="DESC";
            $albums=$this->albumModel->getAlbums($sort,$order);
            $this->view->response($albums,200);  
        }
        else if(empty($sort)&&!empty($order)){
            $sort='id_album';
            $albums=$this->albumModel->getAlbums($sort,$order);
            $this->view->response($albums,200);  
        }
        else {
            $albums=$this->getAllAlbums();
            $this->view->response($albums,200);
        }
    }
    
    public function paginacion(){
        $pagina=0;
        $limite=10;
        if (isset($_GET['pagina'])&&isset($_GET['limite'])) {
            $limite=$_GET['limite'];
            $pagina=$pagina + $limite*($_GET['pagina']-1);
            if(($pagina>0)&&($limite>0)){
                $cancionesPaginadas=$this->albumModel->paginar($pagina,$limite);
                $this->view->response($cancionesPaginadas,200);
            }
        }else{
            $this->view->response('No se ha especificado la página',400);
        }
    }
    private function checkLoggedIn(){
        $aut=new AuthHelper();
        if (!$aut->validarPermisos() ) {
            $this->view->response("No posee permisos para realizar esta accion.", 401);
            die();
        }
    }

}