<?php

require_once 'AService.php';
require_once '../models/Comanda.php';

class ComandaService extends AService {
    private $comanda;

    public function __construct() {
        $this->comanda = new Comanda();
    }

    public function getAll() {
        return $this->comanda->getAll();
    }

    // Add other necessary methods for comanda operations
}
?>
