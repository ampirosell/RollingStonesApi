<?php
class UserModel{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=rolling_stones;charset=utf8', 'root', '');
    }
    public function getUsuario($username){ //funcion del model original
        $query = $this->db->prepare('SELECT * FROM users WHERE username = :username');
        $query->execute(array(':username' => $username));
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function comprobarUsuario($username,$password){
        
        try {
            $user = $this ->getUsuario($username);

            if ($user && password_verify($password, $user['password_hash'])) {
                // La contraseña es válida, el usuario existe y las credenciales son correctas.
                return $user;
            }
        } catch (PDOException $e) {
            error_log('Error en la consulta de comprobación de usuario: ' . $e->getMessage());
            return null; 
        }
    }
}