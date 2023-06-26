<?php
require_once('models/Song.model.php');
require_once('models/album.model.php');
require_once("json.view.php");

class songApiController {
    protected $songModel;
    protected $view;
    private $data; 

    
    public function __construct() {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input"); 
        $this->songModel = new songModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  


  
    public function getAll($params = null) {
        $songs = $this->songModel->getSongs();
        $this->view->response($songs, 200);
    }

    /**
     * Obtiene una cancion dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getSong($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];
        
        $song = $this->songModel->getSong($id);
        
        if ($song) {
            $this->view->response($song, 200);   
        } else {
            $this->view->response("No existe la canción con el id={$id}", 404);
        }
    }

   
    public function deleteSong($params = []) {
        $song_id = $params[':ID'];
        $song = $this->songModel->getSong($song_id);

        if ($song) {
            $this->songModel->deleteSongById($song_id);
            $this->view->response("Canción id=$song_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("Canción id=$song_id not found", 404);
    }



   public function insert($params = []) {     
        $body = $this->getData(); // la obtengo del body
        $id_album=$body->id_album;
        $title=$body->title_song;

        // inserta la cancion
        $newSong = $this->songModel->insertSong($id_album,$title);
           
        if ($newSong)
            $this->view->response($newSong, 200);
        else
            $this->view->response("Error al insertar canción", 500);

    }

   
    public function updateSong($params = []) {
        $song_id = $params[':ID'];
        $song = $this->songModel->getSong($song_id);

        if ($song) {
            $body = $this->getData();
            $titulo = $body->title_song;
            $id_album = $body->id_album;
        
            $this->songModel->updateSong( $titulo, $id_album,$song_id);
            $this->view->response("Canción id=$song_id actualizada con éxito", 200);
        }
        else 
            $this->view->response("canción id=$song_id not found", 404);
    }


}


