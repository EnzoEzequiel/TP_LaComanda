<?php

require_once 'AController.php';
require_once '../models/Pedido.php';

class PedidoController extends AController {
    public function getAll() {
        $pedido = new Pedido();
        $result = $pedido->getAll();
        $this->jsonResponse($result);
    }

}
?>
