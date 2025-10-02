<?php
class Contact {
    private $conn;
    private $table_name = "contacts";

    public $id;
    public $nom;
    public $email;
    public $sujet;
    public $message;
    public $date_envoi;
    public $statut;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        try {
            $query = "INSERT INTO " . $this->table_name . " 
                     (nom, email, sujet, message, date_envoi, statut) 
                     VALUES (:nom, :email, :sujet, :message, NOW(), 'non_lu')";
            
            $stmt = $this->conn->prepare($query);

            // Nettoyer les données
            $this->nom = htmlspecialchars(strip_tags($this->nom));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->sujet = htmlspecialchars(strip_tags($this->sujet));
            $this->message = htmlspecialchars(strip_tags($this->message));

            $stmt->bindParam(":nom", $this->nom);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":sujet", $this->sujet);
            $stmt->bindParam(":message", $this->message);

            if($stmt->execute()) {
                return true;
            }
            return false;
            
        } catch (PDOException $e) {
            error_log("Erreur Contact::create: " . $e->getMessage());
            return false;
        }
    }
}
?>