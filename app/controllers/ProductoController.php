<?php

require_once 'AController.php';
require_once '../models/Producto.php';

class ProductoController extends AController {
    public function getAll() {
        $producto = new Producto();
        $result = $producto->getAll();
        $this->jsonResponse($result);
    }

}
?>
