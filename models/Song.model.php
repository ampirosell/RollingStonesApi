<?php

class songModel {
    private $db;
    
    function __construct(){
        $this->db=new PDO( 'mysql:host=localhost;'
        .'dbname=rolling_stones;charset=utf8'
        , 'root', '');
    }

    public function getSongs() {
        $sentencia = $this->db->prepare("SELECT * FROM `songs`");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSong($id) {
        $sentencia = $this->db->prepare("SELECT * FROM `songs` WHERE id_song = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function deleteSongById($id){
        $query=$this->db->prepare("DELETE from `songs` WHERE id_song= ? ");
        $query->execute([$id]);        
    }


    public function insertSong($id_song, $album_id, $title_song) {
        $query = $this->db->prepare("INSERT INTO `songs` (`id_song`, `id_album`, `title_song`) VALUES (?, ?, ?)");
        $query->execute(array($id_song, $album_id, $title_song));
        return $this->db->lastInsertId();
    }

    public function updateSong($title,$newId,$song_id){
        $query=$this->db->prepare("UPDATE `songs` SET `title_song`= ?  WHERE id_song=?");
        $query->execute(array($title,$song_id)); 
        $query=$this->db->prepare("UPDATE `songs` SET `id_album` = ? WHERE `title_song` = ?");
        $query->execute(array($newId,$title));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
}
?>