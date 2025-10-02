<?php
class Database {
    private $host = "localhost";
    private $db_name = "clinique_ecole"; 
    private $username = "postgres";
    private $password = "0503";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "pgsql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password
            );
            // SUPPRIMER cette ligne qui cause l'erreur :
            // $this->conn->exec("set names utf8");
            
            // Optionnel : configurer l'encodage pour PostgreSQL
            $this->conn->exec("SET client_encoding TO 'UTF8'");
            
        } catch(PDOException $exception) {
            echo "Erreur de connexion: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>