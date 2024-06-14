<?php

require_once 'AController.php';
require_once '../models/Mozo.php';

class MozoController extends AController {
    public function getAll() {
        $mozo = new Mozo();
        $result = $mozo->getAll();
        $this->jsonResponse($result);
    }

}
?>
