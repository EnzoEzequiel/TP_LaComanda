<?php

require_once 'AService.php';
require_once '../models/Producto.php';

class ProductoService extends AService {
    private $producto;

    public function __construct() {
        $this->producto = new Producto();
    }

    public function getAll() {
        return $this->producto->getAll();
    }

    // Add other necessary methods for producto operations
}
?>
