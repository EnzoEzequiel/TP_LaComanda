<?php

require_once 'AService.php';
require_once '../models/Pedido.php';

class PedidoService extends AService {
    private $pedido;

    public function __construct() {
        $this->pedido = new Pedido();
    }

    public function getAll() {
        return $this->pedido->getAll();
    }

    // Add other necessary methods for pedido operations
}
?>
