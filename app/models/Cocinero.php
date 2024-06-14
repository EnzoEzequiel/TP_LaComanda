<?php

require_once '../db/Database.php';

class Cocinero {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM cocineros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Add other necessary methods
}
?>
