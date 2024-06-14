<?php

require_once 'AController.php';
require_once '../models/Cocinero.php';

class CocineroController extends AController {
    public function getAll() {
        $cocinero = new Cocinero();
        $result = $cocinero->getAll();
        $this->jsonResponse($result);
    }

}
?>
