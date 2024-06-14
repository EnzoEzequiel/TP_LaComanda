<?php

require_once '../db/Database.php';

class Mozo {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM mozos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Add other necessary methods
}
?>
