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


  
    public function getAll($params = null) {
        $songs = $this->albumModel->getAllAlbums();
        $this->view->response($songs, 200);
    }

    /**
     * Obtiene una cancion dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getAlbum($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $song = $this->albumModel->getOneAlbum($id);
        
        if ($song) {
            $this->view->response($song, 200);   
        } else {
            $this->view->response("No existe la canción con el id={$id}", 404);
        }
    }

   
    public function deleteAlbum($params = []) {
        $album_id = $params[':ID'];
        $album = $this->albumModel->getOneAlbum($album_id);

        if ($album) {
            $this->albumModel->deleteAlbumById($album_id);
            $this->view->response("album id=$album_id eliminad0 con éxito", 200);
        }
        else 
            $this->view->response("album id=$album_id not found", 404);
    }



   public function addAlbum($params = []) {     
        $body = $this->getData(); // la obtengo del body
        $id_album=$body->id_album;
        $title=$body->titulo_album;
        $year=$body->year_release;
        $img=$body->img_cover;

        // inserta la cancion
        $newAlbum = $this->albumModel->insertAlbum( $id_album,$title,$year,$img);
           
        if ($newAlbum)
            $this->view->response($newAlbum, 200);
        else
            $this->view->response("Error al insertar Album", 500);

    }

   
    public function updateAlbum($params = []) {
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


}