<?php

require_once 'AService.php';
require_once '../models/Usuario.php';

class UsuarioService extends AService {
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function getAll() {
        return $this->usuario->getAll();
    }

    // Add other necessary methods for usuario operations
}
?>
