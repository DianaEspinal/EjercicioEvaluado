<?php
namespace app\models;

class Contacto {
    private $telefono;

    public function __construct($telefono) {
        $this->telefono = $telefono;
    }

    public function validarTelefono() {
        
        return preg_match("/^(2|6|7)\d{7}$/", $this->telefono);
    }
}
