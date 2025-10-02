<?php
class Formation {
    private $conn;
    private $table_name = "formations";

    public $id;
    public $titre;
    public $description;
    public $duree;
    public $prix;
    public $categorie;
    public $image_url;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY date_creation DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readByCategory($categorie) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE categorie = :categorie ORDER BY titre";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":categorie", $categorie);
        $stmt->execute();
        return $stmt;
    }
}
?>