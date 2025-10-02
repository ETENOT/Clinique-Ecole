<?php
class Inscription {
    private $conn;
    private $table_name = "inscriptions";

    public $id;
    public $utilisateur_id;
    public $formation_id;
    public $nom_complet;
    public $email;
    public $telephone;
    public $formation_souhaitee;
    public $message;
    public $date_inscription;
    public $statut;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        try {
            $query = "INSERT INTO " . $this->table_name . " 
                     (nom_complet, email, telephone, formation_souhaitee, message, utilisateur_id, formation_id, date_inscription, statut) 
                     VALUES (:nom_complet, :email, :telephone, :formation_souhaitee, :message, :utilisateur_id, :formation_id, NOW(), 'en_attente')";
            
            $stmt = $this->conn->prepare($query);

            // Nettoyer et lier les données
            $this->nom_complet = htmlspecialchars(strip_tags($this->nom_complet));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->telephone = htmlspecialchars(strip_tags($this->telephone));
            $this->formation_souhaitee = htmlspecialchars(strip_tags($this->formation_souhaitee));
            $this->message = htmlspecialchars(strip_tags($this->message));

            $stmt->bindParam(":nom_complet", $this->nom_complet);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":telephone", $this->telephone);
            $stmt->bindParam(":formation_souhaitee", $this->formation_souhaitee);
            $stmt->bindParam(":message", $this->message);
            $stmt->bindParam(":utilisateur_id", $this->utilisateur_id);
            $stmt->bindParam(":formation_id", $this->formation_id);

            if($stmt->execute()) {
                return true;
            }
            return false;
            
        } catch (PDOException $e) {
            error_log("Erreur Inscription::create: " . $e->getMessage());
            return false;
        }
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY date_inscription DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>